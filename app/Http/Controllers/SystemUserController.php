<?php 

namespace App\Http\Controllers;

use App\Http\Requests\StoreSystemUserRequest;
use App\Http\Requests\UpdateSystemUserPassword;
use App\Http\Requests\UpdateSystemUserRequest;
use App\Models\SystemUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SystemUserController extends Controller
{
    use AuthorizesRequests;
    public function index(Request $request): JsonResponse
    {
        $this->authorize("viewAny", SystemUser::class);

        $query = SystemUser::with(['creator', 'lastEditor']);

        if ($request->has('tipo')) {
            $query->where('tipo', $request->input('tipo'));
        }

        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
        } // usar input como padrõa para coleta de dados dos requests

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('nome', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $users = $query->paginate($request->get('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSystemUserRequest $request): JsonResponse
    {

        $this->authorize('create', SystemUser::class);

        try {
            $validated = $request->validated();

            $user = Auth::user();

            $validated['criador'] = $user->id;

            $validated['ultimo_editor'] = $user->id;

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

        $this->authorize('view', $user);

        return response()->json([
            'sucess' => true,
            'data' => $user->load(['creator', 'lastEditor']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemUserRequest $request, SystemUser $user): JsonResponse
    {
        $this->authorize('update', $user);
        try {
            $validated = $request->validated();

            if($request->has('password')) {
                return response()->json([
                    'success'=> false,
                    'message'=> 'A senha não pode ser atualizado neste endpoint.',
                ], 422);
            };

            $validated['ultimo_editor'] = auth()->id();

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

    public function updatePassword(UpdateSystemUserPassword $request, SystemUser $user): JsonResponse
{
    $this->authorize('update', $user);

    try {
        $user->update([
            'password' => bcrypt($request->input('password')),
            'ultimo_editor' => auth()->id(),
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
     * Remove the specified resource from storage.
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
