<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChanceStatusQuestionRequest;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Alternative;
use App\Models\Question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $this->authorize('viewAny', Question::class);

        $query = Question::with(['creator', 'lastEditor', 'alternatives', 'materia']);

        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->has('type')) {
            $type = $request->input('type');
            $query->where('type', $type);
        }

        if ($request->has('materia')) {
            $materia = $request->input('materia');
            $query->whereHas('materia', function ($q) use ($materia) {
                $q->where('name', 'like', "%{$materia}%")
                    ->orWhere('id', $materia);
            });
        }

        if ($request->has('creator')) {
            $creator = $request->input('creator');
            $query->whereHas('creator', function ($q) use ($creator) {
                $q->where('name', 'like', "%{$creator}%")
                    ->orWhere('id', $creator);
            });
        }

        $questions = $query->paginate($request->get('per_page', 10));

        return response()->json([
            'success' => true,
            'data' => $questions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request): JsonResponse
    {
        $this->authorize('create', Question::class);

        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $user = Auth::user();

            $alternativesData = $validated['alternatives'] ?? [];
            unset($validated['alternatives']);

            $validated['criador'] = $user->id;
            $validated['ultimo_editor'] = $user->id;

            $question = Question::create($validated);

            if ($question->type !== 'Aberta' && ! empty($alternativesData)) {
                foreach ($alternativesData as $alternativeData) {
                    Alternative::create([
                        'question_id' => $question->id,
                        'content' => $alternativeData['content'],
                        'correct' => $alternativeData['correct'] ?? false,
                        'criador' => $user->id,
                        'ultimo_editor' => $user->id,
                    ]);
                }
            }

            DB::commit();

            $question->load(['alternatives', 'materia', 'creator', 'lastEditor']);

            return response()->json([
                'success' => true,
                'message' => 'Questão cadastrada com sucesso',
                'data' => $question,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Erro ao cadastrar questão',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question): JsonResponse
    {
        $this->authorize('view', $question);

        return response()->json([
            'success' => true,
            'message' => 'Questão carregada com sucesso',
            'data' => $question->load(['creator', 'lastEditor', 'alternatives', 'materia']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question): JsonResponse
    {
        $this->authorize('update', $question);

        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $alternativesData = $validated['alternatives'] ?? null;
            $user = Auth::user();

            unset($validated['alternatives']);

            $validated['ultimo_editor'] = $user->id;
            $question->update($validated);

            if ($alternativesData !== null) {
                $alternativeIds = [];

                foreach ($alternativesData as $alternativeData) {
                    if (isset($alternativeData['id'])) {
                        $alternative = Alternative::find($alternativeData['id']);

                        if ($alternative && $alternative->question_id === $question->id) {
                            $alternative->update([
                                'content' => $alternativeData['content'],
                                'correct' => $alternativeData['correct'] ?? false,
                                'ultimo_editor' => $user->id,
                            ]);
                            $alternativeIds[] = $alternative->id;
                        }
                    } else {
                        $newAlternative = Alternative::create([
                            'question_id' => $question->id,
                            'content' => $alternativeData['content'],
                            'correct' => $alternativeData['correct'] ?? false,
                            'criador' => $user->id,
                            'ultimo_editor' => $user->id,
                        ]);
                        $alternativeIds[] = $newAlternative->id;
                    }
                }

                Alternative::where('question_id', $question->id)
                    ->whereNotIn('id', $alternativeIds)
                    ->delete();
            }

            DB::commit();

            $question->load(['alternatives', 'materia', 'creator', 'lastEditor']);

            return response()->json([
                'success' => true,
                'message' => 'Questão atualizada com sucesso',
                'data' => $question,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar questão',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question): JsonResponse
    {
        $this->authorize('delete', $question);

        try {
            $question->delete();

            return response()->json([
                'success' => true,
                'message' => 'Questão excluída com sucesso',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir questão',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Change the status of the specified resource.
     */
    public function changeStatus(ChanceStatusQuestionRequest $request, Question $question): JsonResponse
    {
        $this->authorize('update', $question);

        try {
            $question->update([
                'status' => $request->input('status'),
                'ultimo_editor' => Auth::id(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status da questão atualizado com sucesso',
                'data' => $question->fresh()->load(['alternatives']),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao alterar status da questão',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
