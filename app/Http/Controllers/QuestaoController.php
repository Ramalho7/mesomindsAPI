<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestaoComAlternativas;
use App\Models\Questao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Questao::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestaoComAlternativas $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $alternativasData = $validated['alternativas'];
            $criadorId = $validated['criador'];
             // Remove 'alternativas' do array validado para evitar erro de mass assignment
            unset($validated['alternativas']);

           $alternativasParaSalvar = collect($alternativasData)->map(function ($alternativa) use ($criadorId) {
                $alternativa['criador'] = $criadorId;
                return $alternativa;
             })->toArray();

            $questao = Questao::create($validated);
            $questao->alternativas()->createMany($alternativasParaSalvar);
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Questão criada com sucesso']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar questão: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Questao $questao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questao $questao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Questao $questao)
    {
        $questao->update($request->all());
        return $questao;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questao $questao)
    {
        $questao->delete();
        return response()->json(['message' => 'Questão deletada com sucesso']);
    }
}
