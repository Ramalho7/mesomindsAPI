<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContent;
use App\Models\ContentImage;
use App\Models\ContentTag;
use App\Models\ContentType;
use App\Models\Conteudo;
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

        if ($request->hasFile('images')) {
            $imageIds = [];
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('images', 'public');

                $contentImage = ContentImage::create([
                    'file_name' => $image->getClientOriginalName(),
                    'file_path' => $path,
                    'alt_text' => $validated['image_alt_text'][$index] ?? null,
                ]);

                $imageIds[$contentImage->id] = ['order' => $index];
            }

            $conteudo->images()->attach($imageIds);
        }

        $conteudo->load(['images', 'contentType', 'contentTag', 'creator']);

        return response()->json([
            'success' => true,
            'conteudo' => $conteudo,
            'image_urls' => $conteudo->images->map(fn ($img) => asset('storage/'.$img->file_path)),
        ], 201);
    }
}
