<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContent;
use App\Models\ContentImage;
use App\Models\ContentTag;
use App\Models\ContentType;
use App\Models\Conteudo;
use App\Models\Materias;
use Illuminate\Support\Facades\Auth;

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

        $imageId = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');

            $image = ContentImage::create([
                'file_name' => $request->file('image')->getClientOriginalName(),
                'file_path' => $path,
                'alt_text' => $validated['image_alt_text'] ?? null,
            ]);

            $imageId = $image->id;
        }

        $materiaId = null;

        $conteudo = Conteudo::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'content_types_id' => $contentType->id,
            'content_tags_id' => $contentTag->id,
            'image_id' => $imageId,
            'id_materia' => $materiaId,
            'status' => $validated['status'],
            'published_at' => $validated['published_at'],
            'criador' => $user->id,
        ]);

        $conteudo->load(['contentImage', 'contentType', 'contentTag', 'creator']);

        return response()->json([
            'success' => true,
            'conteudo' => $conteudo,
            // Usar contentImage ao invés de image
            'image_url' => $conteudo->contentImage ? asset('storage/' . $conteudo->contentImage->file_path) : null,
        ], 201);
    }
}
