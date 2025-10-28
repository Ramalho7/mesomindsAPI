<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeStatusContentTypeRequest;
use App\Http\Requests\StoreContentType;
use App\Http\Requests\UpdateContentTypeRequest;
use App\Models\ContentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = ContentType::with(['creator']);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $contentType = $query->paginate(($request->get('per_page', 10)));

        return response()->json([
            'success' => true,
            'data' => $contentType
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContentType $request)
    {
        try {
            $validated = $request->validated();

            $user = Auth::user();

            $validated['criador'] = $user->id;

            $validated['ultimo_editor'] = $user->id;

            $contentType = ContentType::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Tipo de conteúdo cadastrado com sucesso',
                'data' => $contentType,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'sucess' => false,
                'message' => 'Erro ao criar tipo de conteúdo',
                'error' => $e->getMessage(),
            ], 500);
        }
        ;
    }

    /**
     * Display the specified resource.
     */
    public function show(ContentType $contentType)
    {
        return response()->json([
            'success' => true,
            'data' => $contentType->load(['creator', 'lastEditor']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContentTypeRequest $request, ContentType $contentType)
    {
        try {

            $validated = $request->validated();

            $user = Auth::user();

            $validated['criador'] = $user->id;

            $validated['ultimo_editor'] = $user->id;

            $contentType->update($validated);

            return response()->json([
                'success' => true,
                'message' => "Tipo de conteúdo cadastrado com sucesso",
                'data' => $contentType->fresh()->load(['creator']),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Erro ao atualiza o tipo de conteúdo",
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentType $contentType)
    {
        try {
            $user = Auth::user();

            if (!($user && $user->tipo === "ADM")) {
                return response()->json([
                    "success" => false,
                    'message' => 'Acesso negado',
                ], 403);
            }

            $contentType->delete();

            return response()->json([
                'success' => true,
                'message' => 'Tipo de conteúdo excluído com sucesso',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir o tipo de conteúdo'
            ], 500);
        }
    }

    public function changeStatus(ChangeStatusContentTypeRequest $request, ContentType $contentType)
    {
        try {
            $user = Auth::user();

            $validated = $request->validated();

            $contentType->update([
                'status' => $validated['status'],
                'ultimo_editor' => $user->id,
            ]);

            $contentType->refresh();

            return response()->json([
                'success' => true,
                'message' => 'Status alterado com sucesso',
                'data' => $contentType,
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
