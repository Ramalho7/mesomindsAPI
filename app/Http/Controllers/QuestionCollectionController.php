<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChanceStatusQuestionCollectionRequest;
use App\Http\Requests\StoreQuestionCollectionRequest;
use App\Http\Requests\UpdateQuestionCollectionRequest;
use App\Models\Question;
use App\Models\QuestionCollection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionCollectionController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $this->authorize('viewAny', QuestionCollection::class);

        $query = QuestionCollection::with(['createdBy', 'updatedBy', 'questions']);

        if ($request->has('status')) {
            $query->status($request->input('status'));
        }

        $query->search($request->input('search'));

        if ($request->has('type')) {
            $query->type($request->input('type'));
        }

        $collections = $query->paginate($request->get('per_page', 10));

        return response()->json([
            'success' => true,
            'message' => 'Coleção carregada com sucesso',
            'data' => $collections,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionCollectionRequest $request): JsonResponse
    {
        $this->authorize('create', QuestionCollection::class);

        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $user = Auth::user();
            $questionsData = $validated['questions'] ?? [];

            unset($validated['questions']);

            $validated['created_by'] = $user->id;
            $validated['updated_by'] = $user->id;

            $questionCollection = QuestionCollection::create($validated);

            foreach ($questionsData as $index => $questionData) {
                $alternativesData = $questionData['alternatives'] ?? [];
                unset($questionData['alternatives']);

                $question = Question::create(array_merge($questionData, [
                    'criador' => $user->id,
                    'ultimo_editor' => $user->id,
                ]));

                $questionCollection->questions()->attach($question->id, [
                    'order' => $index + 1,
                    'status' => $questionData['status'] ?? 'Active',
                    'created_by' => $user->id,
                    'updated_by' => $user->id,
                ]);

                foreach ($alternativesData as $alternativeData) {
                    $question->alternatives()->create(array_merge($alternativeData, [
                        'criador' => $user->id,
                        'ultimo_editor' => $user->id,
                    ]));
                }
            }

            DB::commit();

            $questionCollection->load(['createdBy', 'updatedBy', 'questions.alternatives']);

            return response()->json([
                'success' => true,
                'message' => 'Coleção de questões cadastrada com sucesso',
                'data' => $questionCollection,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar coleção de questões',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionCollection $questionCollection): JsonResponse
    {
        $this->authorize('view', $questionCollection);

        return response()->json([
            'success' => true,
            'message' => 'Conteúdo carregada com sucesso',
            'data' => $questionCollection->load(['createdBy', 'updatedBy', 'questions.alternatives']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionCollectionRequest $request, QuestionCollection $questionCollection): JsonResponse
    {
        $this->authorize('update', $questionCollection);

        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $user = Auth::user();
            $questionsData = $validated['questions'] ?? null;

            unset($validated['questions']);

            $validated['updated_by'] = $user->id;

            $questionCollection->update($validated);

            if ($questionsData !== null) {
                $pivotData = [];

                foreach ($questionsData as $index => $questionData) {
                    $questionId = $questionData['id'];

                    $questionUpdateData = array_filter([
                        'title' => $questionData['title'] ?? null,
                        'content' => $questionData['content'] ?? null,
                        'correction' => $questionData['correction'] ?? null,
                        'type' => $questionData['type'] ?? null,
                        'status' => $questionData['status'] ?? null,
                        'ultimo_editor' => $user->id,
                    ], fn ($value) => $value !== null);

                    if (! empty($questionUpdateData)) {
                        DB::table('questions')
                            ->where('id', $questionId)
                            ->update(array_merge($questionUpdateData, ['updated_at' => now()]));
                    }

                    if (isset($questionData['alternatives'])) {
                        foreach ($questionData['alternatives'] as $alternativeData) {
                            if (isset($alternativeData['id'])) {
                                // Atualizar alternativa existente
                                DB::table('alternatives')
                                    ->where('id', $alternativeData['id'])
                                    ->where('question_id', $questionId)
                                    ->update([
                                        'content' => $alternativeData['content'],
                                        'correct' => $alternativeData['correct'] ?? false,
                                        'ultimo_editor' => $user->id,
                                        'updated_at' => now(),
                                    ]);
                            } else {
                                DB::table('alternatives')->insert([
                                    'question_id' => $questionId,
                                    'content' => $alternativeData['content'],
                                    'correct' => $alternativeData['correct'] ?? false,
                                    'criador' => $user->id,
                                    'ultimo_editor' => $user->id,
                                    'created_at' => now(),
                                    'updated_at' => now(),
                                ]);
                            }
                        }
                    }

                    $pivotData[$questionId] = [
                        'status' => 'Active',
                        'order' => $index + 1,
                        'created_by' => $user->id,
                        'updated_by' => $user->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }

                $questionCollection->questions()->sync($pivotData);
            }

            DB::commit();

            $questionCollection->load(['createdBy', 'updatedBy', 'questions.alternatives']);

            return response()->json([
                'success' => true,
                'message' => 'Coleção de questões atualizada com sucesso',
                'data' => $questionCollection,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar coleção de questões',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionCollection $questionCollection): JsonResponse
    {
        $this->authorize('delete', $questionCollection);

        try {
            $questionCollection->delete();

            return response()->json([
                'success' => true,
                'message' => 'Coleção de questões excluída com sucesso',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir coleção de questões',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function changeStatus(ChanceStatusQuestionCollectionRequest $request, QuestionCollection $questionCollection): JsonResponse
    {
        $this->authorize('changeStatus', $questionCollection);

        try {
            DB::beginTransaction();

            $status = $request->input('status');
            $user = Auth::user();

            $questionCollection->update([
                'status' => $status,
                'updated_by' => $user->id,
            ]);

            if ($questionCollection->questions()->exists()) {
                DB::table('question_colletion_pivot')
                    ->where('collection_id', $questionCollection->id)
                    ->update([
                        'status' => $status,
                        'updated_by' => $user->id,
                        'updated_at' => now(),
                    ]);

                if ($status === 'Inactive') {
                    $questionIds = DB::table('questions')
                        ->join('question_colletion_pivot', 'questions.id', '=', 'question_colletion_pivot.question_id')
                        ->where('question_colletion_pivot.collection_id', $questionCollection->id)
                        ->pluck('questions.id');

                    DB::table('questions')
                        ->whereIn('id', $questionIds)
                        ->update([
                            'status' => 'Inactive',
                            'ultimo_editor' => $user->id,
                            'updated_at' => now(),
                        ]);
                } elseif ($status === 'Active') {
                    $questionIds = DB::table('questions')
                        ->join('question_colletion_pivot', 'questions.id', '=', 'question_colletion_pivot.question_id')
                        ->where('question_colletion_pivot.collection_id', $questionCollection->id)
                        ->pluck('questions.id');

                    DB::table('questions')
                        ->whereIn('id', $questionIds)
                        ->update([
                            'status' => 'Active',
                            'ultimo_editor' => $user->id,
                            'updated_at' => now(),
                        ]);
                }
            }

            DB::commit();

            $questionCollection = QuestionCollection::with([
                'createdBy',
                'updatedBy',
                'questions',
            ])->findOrFail($questionCollection->id);

            return response()->json([
                'success' => true,
                'message' => 'Status da coleção e questões atualizado com sucesso',
                'data' => $questionCollection,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Erro ao alterar status da coleção',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
