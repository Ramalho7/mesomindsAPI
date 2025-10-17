<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContent;
use App\Models\ContentImage;
use App\Models\ContentTag;
use App\Models\ContentType;
use App\Models\Conteudo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ConteudoController extends Controller
{
    public function store(StoreContent $request)
    {
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

        $conteudo = Conteudo::create([
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
            ]),
        ], 201);
    }
}
