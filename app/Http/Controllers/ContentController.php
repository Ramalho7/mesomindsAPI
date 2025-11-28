<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeStatusContentRequest;
use App\Http\Requests\StoreContent;
use App\Http\Requests\UpdateContentRequest;
use App\Models\Content;
use App\Models\ContentImage;
use App\Models\ContentTag;
use App\Models\ContentType;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    use AuthorizesRequests;

    public function index(Request $request): JsonResponse
    {
        $this->authorize('viewAny', Content::class);
        $query = Content::withoutGlobalScopes()->with(['creator', 'contentType', 'contentTags', 'images', 'lastEditor']);
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

        if ($request->has('content_type')) {
            $contentType = $request->input('content_type');
            $query->whereHas('contentType', function ($q) use ($contentType) {
                $q->where('title', 'like', "%{$contentType}%");
            });
        }

        if ($request->has('content_tag')) {
            $contenTag = $request->input('content_tag');
            $query->whereHas('contentTags', function ($q) use ($contenTag) {
                $q->where('tag_name', 'like', "%{$contenTag}%");
            });
        }

        $contents = $query->paginate($request->get('per_page', 10));

        return response()->json([
            'success' => true,
            'data' => $contents,
        ]);
    }

    public function store(StoreContent $request)
    {
        $this->authorize('create', Content::class);
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

            $conteudo = Content::create([
                'title' => $validated['title'],
                'content' => $validated['content'],
                'content_types_id' => $contentType->id,
                'id_materia' => null,
                'status' => $validated['status'],
                'published_at' => $validated['published_at'],
                'criador' => $user->id,
            ]);

            if (! empty($validated['content_tags'])) {
                $tags = collect($validated['content_tags'])->map(function ($tag) use ($user) {
                    return ContentTag::firstOrCreate(
                        ['tag_name' => $tag['tag_name']],
                        [
                            'description' => $tag['description'] ?? '',
                            'criador' => $user->id,
                        ]
                    );
                });

                $conteudo->contentTags()->sync($tags->pluck('id'));
            }

            if (! empty($validated['images'])) {
                $imageIds = [];

                foreach ($validated['images'] as $index => $base64Image) {
                    if (preg_match('/^data:image\/(\w+);base64,/', $base64Image, $matches)) {
                        $mimeType = "image/{$matches[1]}";
                        $base64Data = substr($base64Image, strpos($base64Image, ',') + 1);
                    } else {
                        $mimeType = 'image/png';
                        $base64Data = $base64Image;
                    }

                    $fileName = Str::uuid().'.'.($matches[1] ?? 'png');

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

            $conteudo->load(['images', 'contentType', 'contentTags', 'creator']);

            return response()->json([
                'success' => true,
                'conteudo' => $conteudo,
                'images' => $conteudo->images->map(fn ($img) => [
                    'id' => $img->id,
                    'alt_text' => $img->alt_text,
                    'base64' => $img->full_base64,
                ]),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar conteúdos',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(Content $conteudo): JsonResponse
    {
        $this->authorize('view', $conteudo);

        return response()->json([
            'success' => true,
            'data' => $conteudo->load(['creator', 'contentType', 'contentTags', 'images']),
        ]);
    }

    public function update(UpdateContentRequest $request, Content $content): JsonResponse
    {
        $this->authorize('update', $content);
        try {
            $validated = $request->validated();

            $validated['ultimo_editor'] = Auth::id();

            $content->update($validated);

            $updatedContent = Content::withoutGlobalScopes()->find($content->id);

            if (! $updatedContent) {
                return response()->json([
                    'success' => false,
                    'message' => 'Erro ao recarregar o conteúdo atualizado.',
                ], 500);
            }

            if (! empty($validated['content_tags'])) {
                $tags = collect($validated['content_tags'])->map(function ($tag) {
                    return ContentTag::firstOrCreate(
                        ['tag_name' => $tag['tag_name']],
                        [
                            'description' => $tag['description'] ?? '',
                            'criador' => Auth::id(),
                        ]
                    );
                });

                $updatedContent->contentTags()->sync($tags->pluck('id'));
            }

            return response()->json([
                'success' => true,
                'message' => 'Conteúdo atualizado com sucesso',
                'data' => $updatedContent->load(['creator', 'contentType', 'contentTags', 'images']),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar conteúdo',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Content $content): JsonResponse
    {
        $this->authorize('delete', $content);
        try {
            $content->delete();

            return response()->json([
                'success' => true,
                'message' => 'Conteúdo excluído com sucesso',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir o conteúdo',
            ], 500);
        }
    }

    public function changeStatus(ChangeStatusContentRequest $request, Content $content)
    {

        $this->authorize('changeStatus', $content);

        try {

            $validated = $request->validated();
            $validated['ultimo_editor'] = Auth::id();

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
