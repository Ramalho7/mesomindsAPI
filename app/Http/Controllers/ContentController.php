<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeStatusContentRequest;
use App\Http\Requests\StoreContent;
use App\Http\Requests\UpdateContentRequest;
use App\Models\ContentImage;
use App\Models\ContentTag;
use App\Models\ContentType;
use App\Models\Content;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Content::with(['creator', 'contentType', 'contentTag', 'images']);

        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->has("content_type")) {
            $contentType = $request->input("content_type");
            $query->whereHas('contentType', function ($q) use ($contentType) {
                $q->where('title', 'like', "%{$contentType}%");
            });
        }

        if ($request->has("content_tag")) {
            $contenTag = $request->input("content_tag");
            $query->whereHas('contentTag', function ($q) use ($contenTag) {
                $q->where('tag_name', 'like', "%{$contenTag}%");
            });
        }

        $contents = $query->paginate(($request->get('per_page', 10)));

        return response()->json([
            'success' => true,
            'data' => $contents
        ]);
    }

    public function store(StoreContent $request)
    {
        try {
            $validated = $request->validated();
            $user = Auth::user();

            $contentType = ContentType::firstOrCreate(
                ['title' => $validated['content_type']],
                [
                    'description' => $validated['content_type_description'] ?? '',
                    'criador' => $user->id,
                ]
            );

            $contentTag = ContentTag::firstOrCreate(
                ['tag_name' => $validated['content_tag']],
                [
                    'description' => $validated['content_tag_description'] ?? '',
                    'is_moderator_only' => $validated['is_moderator_only'] ?? false,
                    'criador' => $user->id,
                ]
            );

            $conteudo = Content::create([
                'title' => $validated['title'],
                'content' => $validated['content'],
                'content_types_id' => $contentType->id,
                'content_tags_id' => $contentTag->id,
                'id_materia' => null,
                'status' => $validated['status'],
                'published_at' => $validated['published_at'],
                'criador' => $user->id,
            ]);

            if (!empty($validated['images'])) {
                $imageIds = [];

                foreach ($validated['images'] as $index => $base64Image) {
                    if (preg_match('/^data:image\/(\w+);base64,/', $base64Image, $matches)) {
                        $mimeType = "image/{$matches[1]}";
                        $base64Data = substr($base64Image, strpos($base64Image, ',') + 1);
                    } else {
                        $mimeType = 'image/png';
                        $base64Data = $base64Image;
                    }

                    $fileName = Str::uuid() . '.' . $matches[1] ?? 'png';

                    $contentImage = ContentImage::create([
                        'file_name' => $fileName,
                        'file_path' => null,
                        'alt_text' => $validated['image_alt_text'][$index] ?? null,
                        'base64_data' => $base64Data,
                        'mime_type' => $mimeType,
                    ]);

                    $imageIds[$contentImage->id] = ['order' => $index];
                }

                $conteudo->images()->attach($imageIds);
            }

            $conteudo->load(['images', 'contentType', 'contentTag', 'creator']);

            return response()->json([
                'success' => true,
                'conteudo' => $conteudo,
                'images' => $conteudo->images->map(fn($img) => [
                    'id' => $img->id,
                    'alt_text' => $img->alt_text,
                    'base64' => $img->full_base64,
                ], 201),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Erro ao cadastrar conteúdos",
                'error' => $e->getMessage(),
            ], 500);
        }
    }

   public function show(Content $conteudo): JsonResponse
{   
    return response()->json([
        'success' => true,
        'data' => $conteudo->load(['creator', 'contentType', 'contentTag', 'images']),
    ]);
}

    public function update(UpdateContentRequest $request, Content $content): JsonResponse
    {
        try {
            $validated = $request->validated();

            $user = Auth::user();

            $validated['criador'] = $user->id;

            $validated['ultimo_editor'] = $user->id;

            $content->update($validated);

            return response()->json([
                'success' => true,
                'message' => "Conteúdo cadastrado com sucesso",
                'data' => $content->fresh()->load(['creator', 'contentType', 'contentTag', 'images']),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Erro ao atualiza conteúdo",
                'error' => $e->getMessage(),
            ], 500);
        }
        ;
    }

    public function destroy(Content $content): JsonResponse
    {
        try {
            $user = Auth::user();

            if (!($user && $user->tipo === "ADM")) {
                return response()->json([
                    "success" => false,
                    'message' => 'Acesso negado',
                ], 403);
            }

            $content->delete();

            return response()->json([
                'success' => true,
                'message' => 'Conteúdo excluído com sucesso',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir o conteúdo'
            ], 500);
        }
    }

    public function changeStatus(ChangeStatusContentRequest $request, Content $content)
    {
        try {
            $user = Auth::user();

            $validated = $request->validated();
            $validated['ultimo_editor'] = $user->id;

            $content->update([
                'status' => $validated['status'],
                'ultimo_editor' => $validated['ultimo_editor'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status alterado com sucesso',
                'data' => $content->fresh(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao alterar status',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
