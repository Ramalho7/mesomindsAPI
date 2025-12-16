<?php

namespace App\Http\Controllers;

use App\DTO\SystemUserDTOs\SystemUserChangeStatusDTO;
use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdatePasswordDTO;
use App\Http\Requests\SystemUser\ChangeStatusSystemUser;
use App\Http\Requests\SystemUser\StoreSystemUserRequest;
use App\Http\Requests\SystemUser\UpdateSystemUserPassword;
use App\Http\Requests\SystemUser\UpdateSystemUserRequest;
use App\Models\SystemUser;
use App\Services\SystemUserService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SystemUserController extends Controller
{
    use AuthorizesRequests;

    public function __construct(protected SystemUserService $systemUserService) {}

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

        $filters = $request->only([
            'name',
            'email',
            'role',
            'status',
            'created_at',
            'updated_at',
            'deleted_at',
            'created_by',
            'updated_by',
            'search',
        ]);

        $users = $this->systemUserService->getAll($filters);

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
            $authenticatedUser = Auth::user();

            $dto = SystemUserCreateDTO::makeFromRequest($request, $authenticatedUser->id, $authenticatedUser->id);

            $newUser = $this->systemUserService->create($dto);

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
            'data' => $user->load(['creator', 'updater']),
        ]);
    }

    /**
     * update: Atualiza os dados de um usuário do sistema.
     *
     * @group Usuários
     */
    public function update(UpdateSystemUserRequest $request, string $id): JsonResponse
    {
        $user = SystemUser::findOrFail($id);

        $this->authorize('update', $user);
        try {
            if ($request->has('password')) {
                return response()->json([
                    'success' => false,
                    'message' => 'A senha não pode ser atualizado neste endpoint.',
                ], 422);
            }

            $authenticatedUser = Auth::user();

            $dto = SystemUserUpdateDTO::makeFromRequest($request, $authenticatedUser->id);

            $updateUser = $this->systemUserService->update($id, $dto);

            return response()->json([
                'success' => true,
                'message' => 'Usuário atualizado com sucesso',
                'data' => $updateUser->fresh()->load(['creator', 'updater']),
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
            $dto = SystemUserUpdatePasswordDTO::makeFromRequest($request, auth()->id());

            $this->systemUserService->updatePassword($user->id, $dto);

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
            $this->systemUserService->delete($user->id);

            return response()->json([
                'success' => true,
                'message' => 'Usuário excluído com sucesso',
            ], 204);

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
    public function changeStatus(ChangeStatusSystemUser $request, SystemUser $user): JsonResponse
    {
        try {
            $dto = SystemUserChangeStatusDTO::makeFromRequest($request, auth()->id());

            $user = $this->systemUserService->changeStatus($user->id, $dto);

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
