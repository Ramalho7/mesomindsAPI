<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMateriasRequest;
use Illuminate\Http\JsonResponse;
use App\Models\materias;

class MateriasController extends Controller
{
    public function store(StoreMateriasRequest $request): JsonResponse
    {
        try {

            //     if ($request->user()) {
            //     $validated['criador'] = $request->user()->id;
            //     $validated['ultimo_editor'] = $request->user()->id;
            // } após sistema de auth usar isso

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
                'sucess' => false,
                'message' => 'Erro ao cadastrar matéria',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
