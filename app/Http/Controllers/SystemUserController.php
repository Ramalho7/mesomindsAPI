<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSystemUserRequest;
use App\Http\Requests\UpdateSystemUserPassword;
use App\Http\Requests\UpdateSystemUserRequest;
use App\Models\SystemUser;
use App\Services\SystemUserService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SystemUserController extends Controller
{
    use AuthorizesRequests;

    public function __construct(protected SystemUserService $systemUserService)
    {

    }

    /**
     * Index: Retorna uma lista paginada de usuários do sistema com filtros opcionais.
     *
     * @group Usuários
     *
     * Filtros disponíveis:
     * - name: Filtra por nome (fullText)
     * - email: Filtra por email (fullText)
     * - role: Filtra por tipo de usuário
     * - status: Filtra por status do usuário
     * - created_at: Filtra por data de criação
     * - updated_at: Filtra por data de atualização
     * - deleted_at: Filtra por data de exclusão
     * - created_by: Filtra por ID do criador
     * - updated_by: Filtra por ID do último editor
     * - search: Busca geral em nome e email
     */
    public function index(Request $request): JsonResponse
    {
        $this->authorize('viewAny', SystemUser::class);

        $query = SystemUser::with(['creator', 'updater']);

        if ($request->has('name')) {
            $query->name($request->input('name'));
        }

        if ($request->has('email')) {
            $query->email($request->input('email'));
        }

        if ($request->has('role')) {
            $query->role($request->input('role'));
        }

        if ($request->has('status')) {
            $query->status($request->input('status'));
        }

        if ($request->has('created_at')) {
            $query->createdAt($request->input('created_at'));
        }

        if ($request->has('updated_at')) {
            $query->updatedAt($request->input('updated_at'));
        }

        if ($request->has('deleted_at')) {
            $query->deletedAt($request->input('deleted_at'));
        }

        if ($request->has('created_by')) {
            $query->createdBy($request->input('created_by'));
        }

        if ($request->has('updated_by')) {
            $query->updatedBy($request->input('updated_by'));
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->name($search)
                    ->orWhereFullText('email', $search);
            });
        }

        $users = $query->paginate($request->get('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => $users,
        ]);
    }

    /**
     * Store: Cria um novo usuário do sistema, criador por: ADMIN, moderador ou operador.
     * OBS.: Não é self-registration
     *
     * @group Usuários
     */
    public function store(StoreSystemUserRequest $request): JsonResponse
    {
        $this->authorize('create', SystemUser::class);

        try {
            $validated = $request->validated();

            $authenticatedUser = Auth::user();

            $validated['created_by'] = $authenticatedUser->id;
            $validated['updated_by'] = $authenticatedUser->id;

            if (! empty($validated['password'])) {
                $validated['password'] = bcrypt($validated['password']);
            }

            $newUser = SystemUser::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Usuário criado com sucesso',
                'data' => $newUser,
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
     * Show: Retorna os detalhes de um usuário do sistema.
     *
     * @group Usuários
     */
    public function show(SystemUser $user): JsonResponse
    {

        $this->authorize('view', $user);

        return response()->json([
            'success' => true,
            'data' => $user,
        ]);
    }

    /**
     * update: Atualiza os dados de um usuário do sistema.
     *
     * @group Usuários
     */
    public function update(UpdateSystemUserRequest $request, SystemUser $user): JsonResponse
    {
        $this->authorize('update', $user);
        try {
            $validated = $request->validated();

            if ($request->has('password')) {
                return response()->json([
                    'success' => false,
                    'message' => 'A senha não pode ser atualizado neste endpoint.',
                ], 422);
            }

            $validated['updated_by'] = auth()->id();

            $user->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Usuário atualizado com sucesso',
                'data' => $user,
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
     * updatePassword: Atualiza a senha de um usuário do sistema.
     *
     * @group Usuários
     */
    public function updatePassword(UpdateSystemUserPassword $request, SystemUser $user): JsonResponse
    {
        $this->authorize('updatePassword', $user);

        try {
            $user->update([
                'password' => bcrypt($request->input('password')),
                'updated_by' => auth()->id(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Senha atualizada com sucesso',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar senha',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Destroy: Remove um usuário do sistema.
     *
     * @group Usuários
     */
    public function destroy(SystemUser $user)
    {

        $this->authorize('delete', $user);

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

    /**
     * changeStatus: Altera o status de um usuário do sistema.
     *
     * @group Usuários
     */
    public function changeStatus(Request $request, SystemUser $user): JsonResponse
    {
        $request->validate([
            'status' => 'required|in:active,inactive,blocked',
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
