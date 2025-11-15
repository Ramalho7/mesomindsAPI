<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeStatusContentTagRequest;
use App\Http\Requests\StoreContentTag;
use App\Http\Requests\UpdateContentTagRequest;
use App\Models\ContentTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = ContentTag::with(['creator', 'lastEditor']);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('tag_name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $contentTag = $query->paginate($request->get('per_page', 10));

        return response()->json([
            'success' => true,
            'data' => $contentTag,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContentTag $request)
    {
        try {
            $user = Auth::user();
            $validated = $request->validated();

            $validated['criador'] = $user->id;
            $validated['ultimo_editor'] = $user->id;

            $contentTag = ContentTag::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Tag de conteúdo cadastrada com sucesso',
                'data' => $contentTag,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar tag de conteúdo',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ContentTag $contentTag)
    {
        return response()->json([
            'success' => true,
            'data' => $contentTag->load(['creator', 'lastEditor']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContentTagRequest $request, ContentTag $contentTag)
    {
        try {
            $validated = $request->validated();
            $user = Auth::user();

            $validated['ultimo_editor'] = $user->id;

            $contentTag->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Tag de conteúdo atualizada com sucesso',
                'data' => $contentTag->fresh()->load(['creator', 'lastEditor']),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar a tag de conteúdo',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentTag $contentTag)
    {
        try {
            $user = Auth::user();

            if (! ($user && $user->tipo === 'ADM')) {
                return response()->json([
                    'success' => false,
                    'message' => 'Acesso negado',
                ], 403);
            }

            $contentTag->delete();

            return response()->json([
                'success' => true,
                'message' => 'Tag de conteúdo excluída com sucesso',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir a tag de conteúdo',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function changeStatus(ChangeStatusContentTagRequest $request, ContentTag $contentTag)
    {
        try {
            $user = Auth::user();
            $validated = $request->validated();

            $contentTag->status = $validated['status'];
            $contentTag->ultimo_editor = $user->id;
            $contentTag->save();

            $contentTag->refresh();

            return response()->json([
                'success' => true,
                'message' => 'Status alterado com sucesso',
                'data' => $contentTag,
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
