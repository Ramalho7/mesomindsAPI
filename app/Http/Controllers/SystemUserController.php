<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSystemUserRequest;
use App\Http\Requests\UpdateSystemUserRequest;
use App\Models\SystemUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SystemUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $query = SystemUser::with(['creator', 'lastEditor']);

        if ($request->has('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nome', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('cpf', 'like', "%{$search}%");
            });
        }

        $users = $query->paginate($request->get('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => $users,
        ]);
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
    public function store(StoreSystemUserRequest $request): JsonResponse
    {
        try {
            $validated = $request->validated();

            if (! empty($validated['password'])) {
                $validated['password'] = bcrypt($validated['password']);
            }

            $user = SystemUser::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Usuário criado com sucesso',
                'data' => $user->load(['creator', 'lastEditor']),
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao criar usuário',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemUser $user): JsonResponse
    {
        return response()->json([
            'sucess' => true,
            'data' => $user->load(['creator', 'lastEditor']),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemUser $systemUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemUserRequest $request, SystemUser $user): JsonResponse
    {
        try {
            $validated = $request->validated();

            $user->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Usuário atualizado com sucesso',
                'data' => $user->fresh()->load(['creator', 'lastEditor']),
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar usuário',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemUser $user)
    {

        try {
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Usuário excluído com sucesso',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao excluir usuário',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function changeStatus(Request $request, SystemUser $user): JsonResponse
    {
        $request->validate([
            'status' => 'required|in:Ativo,Inativo,Bloqueado',
        ]);

        try {
            $user->update([
                'status' => $request->status,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status alterado com sucesso',
                'data' => $user->fresh(),
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