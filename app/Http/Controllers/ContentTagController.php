<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentTag;
use App\Models\ContentTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContentTag $request)
    {
        try{
        $user = Auth::user();
        $validated = $request->validated();

        $validated['criador'] = $user->id;

        $validated['ultimo_editor'] = $user->id;

        $restrictedTags = ContentTag::whereIn('id', $validated)
        ->where('is_moderator_only', true)
        ->pluck('tag_name');

        if ($restrictedTags->isNotEmpty() && !in_array($user->tipo, ['ADM', 'Moderador'])) {
        return response()->json([
            'error' => 'Você não tem permissão para usar as tags: ' . $restrictedTags->implode(', ')
        ], 403);
        };

        $contentTag = ContentTag::create($validated);

        return response()->json([
                'success' => true,
                'message' => 'Tag de conteúdo cadastrado com sucesso',
                'data' => $contentTag,
            ], 201);
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar tag de conteúdo',
                'error' => $e->getMessage(),
            ], 500);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(ContentTag $contentTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentTag $contentTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentTag $contentTag)
    {
        //
    }
}
