<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestaoComAlternativas;
use App\Http\Requests\UpdateQuestaoRequest;
use App\Models\Alternativa;
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
        try {
            $validated = $request->validated();
            $alternativasData = $validated['alternativas'];
            $criadorId = $validated['criador'];

            unset($validated['alternativas']);

           $alternativasParaSalvar = collect($alternativasData)->map(function ($alternativa) use ($criadorId) {
                $alternativa['criador'] = $criadorId;
                return $alternativa;
             })->toArray();

            $questao = Questao::create($validated);
            $questao->alternativas()->createMany($alternativasParaSalvar);

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
    public function update(UpdateQuestaoRequest $request, Questao $questao)
    {
        try{
            $validated = $request->validated();
            $alternativasData = $validated['alternativas'] ?? null;
            unset($validated['alternativas']);

            Alternativa::where('questao', $questao['id'])->update(['status' => 'inativo']);

            if($alternativasData){

                $alternativasParaSalvar = [];

                foreach($alternativasData as $alternativa){
                    $alternativa['criador'] = $validated['criador'];
                    $alternativasParaSalvar[] = $alternativa;
                }

                $questao->alternativas()->createMany($alternativasParaSalvar)->toArray();
            }

            $questao->update($validated);

            $questaoFresh = $questao->fresh();

            return response()->json([
                'success' => true,
                'message' => 'Questão atualizada com sucesso',
                'data' =>  $questaoFresh,
                'alternativas' => $questaoFresh->alternativas()->where('status', 'ativo')->get(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar questão: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questao $questao)
    {
        $questao->delete();
        return response()->json(['message' => 'Questão deletada com sucesso']);
    }

    public function setStatus(Request $request)
    {

        $questao = Questao::find($request->route('questao'));

        if(!isset($questao)){
            return response()->json([
                'success' => false,
                'message' => 'Questão não encontrada'
            ], 404);
        }

        $request->validate([
            'status' => 'required|in:ativo,inativo'
        ]);

        $questao->status = $request->input('status');
        $questao->save();

        return response()->json([
            'success' => true,
            'message' => 'Status da questão atualizado com sucesso',
            'data' => $questao->with('alternativas')->find($questao->id),
        ]);
    }
}
