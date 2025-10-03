<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeStatusMateriaRequest;
use App\Http\Requests\StoreMateriasRequest;
use App\Http\Requests\UpdateMateriasRequest;
use App\Models\Materias;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function index(Request $request): JsonResponse
    {

        $query = Materias::with(['creator', 'lastEditor']);

        $nome = trim((string) $request->query('nome', ''));
        $status = trim((string) $request->query('status', ''));

        if (! empty($nome)) {
            $query->where('nome', 'like', "%{$nome}%");
        }

        if (! empty($status)) {
            $query->where('status', $status);
        }

        $materias = $query->paginate($request->get('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => $materias,
        ]);
    }

    public function store(StoreMateriasRequest $request): JsonResponse
    {
        try {

            $validated = $request->validated();

            $validated['criador'] = $request->input('criador', $validated['criador'] ?? null);
            $validated['ultimo_editor'] = $request->input('ultimo_editor', $validated['ultimo_editor'] ?? null);

            $materia = Materias::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Materia cadastrada com sucesso',
                'data' => $materia,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar matéria',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(UpdateMateriasRequest $request, Materias $materia): JsonResponse
    {
        try {
            $validated = $request->validated();

            $validated['ultimo_editor'] = auth()->user()->id;

            $materia->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Materia atualizada com sucesso',
                'data' => $materia->fresh()->load('lastEditor'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar a matéria',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function changeStatus(ChangeStatusMateriaRequest $request, Materias $materia)
    {

        try {
            $validated = $request->validated();

            $validated['ultimo_editor'] = auth()->user()->id;

            $materia->update([
                'status' => $validated['status'],
                'ultimo_editor' => $validated['ultimo_editor'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status alterado com sucesso',
                'data' => $materia->fresh(),
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
