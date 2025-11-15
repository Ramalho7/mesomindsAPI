<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorrectStudentAnswerRequest;
use App\Http\Requests\StoreStudentAnswerRequest;
use App\Http\Requests\UpdateStudentAnswerRequest;
use App\Models\StudentAnswer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentAnswerController extends Controller
{
    use AuthorizesRequests;

    public function index(Request $request): JsonResponse
    {
        $query = StudentAnswer::with(['student', 'question', 'collection', 'corrector']);

        if ($request->has('student_id')) {
            $query->where('student_id', $request->input('student_id'));
        }

        if ($request->has('question_id')) {
            $query->where('question_id', $request->input('question_id'));
        }

        if ($request->has('collection_id')) {
            $query->where('collection_id', $request->input('collection_id'));
        }

        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
        }

        $answers = $query->paginate($request->get('per_page', 10));

        return response()->json([
            'success' => true,
            'data' => $answers,
        ]);
    }

    public function store(StoreStudentAnswerRequest $request): JsonResponse
    {
        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $user = Auth::user();

            $answer = StudentAnswer::create([
                'student_id' => $user->id,
                'question_id' => $validated['question_id'],
                'collection_id' => $validated['collection_id'] ?? null,
                'answer' => $validated['answer'],
                'status' => 'Submitted',
                'submitted_at' => now(),
            ]);

            DB::commit();

            $answer->load(['student', 'question', 'collection']);

            return response()->json([
                'success' => true,
                'message' => 'Resposta enviada com sucesso',
                'data' => $answer,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Erro ao enviar resposta',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(StudentAnswer $studentAnswer): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $studentAnswer->load(['student', 'question', 'collection', 'corrector']),
        ]);
    }

    public function update(UpdateStudentAnswerRequest $request, StudentAnswer $studentAnswer): JsonResponse
    {
        if ($studentAnswer->status === 'Corrected') {
            return response()->json([
                'success' => false,
                'message' => 'Não é possível editar uma resposta já corrigida',
            ], 403);
        }

        try {
            $validated = $request->validated();

            $studentAnswer->update([
                'answer' => $validated['answer'],
                'submitted_at' => now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Resposta atualizada com sucesso',
                'data' => $studentAnswer->fresh()->load(['student', 'question', 'collection']),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar resposta',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function correct(CorrectStudentAnswerRequest $request, StudentAnswer $studentAnswer): JsonResponse
    {
        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $user = Auth::user();

            $studentAnswer->update([
                'score' => $validated['score'],
                'feedback' => $validated['feedback'] ?? null,
                'corrected_by' => $user->id,
                'corrected_at' => now(),
                'status' => 'Corrected',
            ]);

            DB::commit();

            $studentAnswer->load(['student', 'question', 'collection', 'corrector']);

            return response()->json([
                'success' => true,
                'message' => 'Resposta corrigida com sucesso',
                'data' => $studentAnswer,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Erro ao corrigir resposta',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(StudentAnswer $studentAnswer): JsonResponse
    {
        try {
            $studentAnswer->delete();

            return response()->json([
                'success' => true,
                'message' => 'Resposta excluída com sucesso',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir resposta',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
