<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChanceStatusQuestionCollectionRequest;
use App\Http\Requests\StoreQuestionCollectionRequest;
use App\Http\Requests\UpdateQuestionCollectionRequest;
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
            $query->where('status', $request->input('status'));
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $collections = $query->paginate($request->get('per_page', 10));

        return response()->json([
            'success' => true,
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

            if (! empty($questionsData)) {
                $pivotData = [];

                foreach ($questionsData as $index => $questionId) {
                    // Seguindo o padrão do ContentController com images
                    $pivotData[$questionId] = [
                        'status' => 'Active',
                        'order' => $index + 1,
                        'created_by' => $user->id,
                        'updated_by' => $user->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }

                $questionCollection->questions()->attach($pivotData);
            }

            DB::commit();

            // Recarregar com relacionamentos
            $questionCollection->load(['createdBy', 'updatedBy', 'questions']);

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
            'data' => $questionCollection->load(['createdBy', 'updatedBy', 'questions']),
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

                foreach ($questionsData as $index => $questionId) {
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

            $questionCollection->load(['createdBy', 'updatedBy', 'questions']);

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
                DB::table('question_activity_pivot')
                    ->where('collection_id', $questionCollection->id)
                    ->update([
                        'status' => $status,
                        'updated_by' => $user->id,
                        'updated_at' => now(),
                    ]);
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
