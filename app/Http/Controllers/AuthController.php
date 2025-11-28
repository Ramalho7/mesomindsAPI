<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\SystemUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Self-register de usuários na plataforma.
     *
     * @group Autenticação
     *
     * @response 201 {
     *  "success": true,
     *  "message": "Cadastro realizado com sucesso",
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
     *  "user": {
     *    "id": 4,
     *    "nome": "Jessica Jones",
     *    "email": "jessica@example.com",
     *    "tipo": "admin",
     *    "status": "Ativo",
     *    "criador": null,
     *    "created_at": "2025-11-28T12:34:56.000000Z",
     *    "updated_at": "2025-11-28T12:34:56.000000Z"
     *  }
     * }
     * @response 403 {
     *  "success": false,
     *  "message": "Usuários autenticados devem usar a rota /api/users para criar novos usuários"
     * }
     * @response 500 {
     *  "success": false,
     *  "message": "Erro ao realizar cadastro",
     *  "error": "mensagem da exceção"
     * }
     */
    public function register(RegisterUserRequest $request)
    {
        try {

            if ($request->user()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuários autenticados devem usar a rota /api/users para criar novos usuários',
                ], 403);
            }

            $validated = $request->validated();

            $user = SystemUser::create([
                'nome' => $validated['nome'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'tipo' => $validated['tipo'],
                'status' => 'Ativo',
                'criador' => null,
            ]);

            $token = $user->generateToken();

            return response()->json([
                'success' => true,
                'message' => 'Cadastro realizado com sucesso',
                'token' => $token,
                'user' => $user,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao realizar cadastro',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Login usuários de usuários na plataforma.
     *
     * @group Autenticação
     *
     * @response 200 {
     *  "success": true,
     *  "message": "Login realizado com sucesso",
     *  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
     *  "user": {
     *    "id": 4,
     *    "nome": "Jessica Jones",
     *    "email": "jessica@example.com",
     *    "tipo": "admin",
     *    "status": "Ativo",
     *    "criador": null,
     *    "created_at": "2025-11-28T12:34:56.000000Z",
     *    "updated_at": "2025-11-28T12:34:56.000000Z"
     *  }
     * }
     * @response 401 {
     *  "success": false,
     *  "message": "Credenciais inválidas"
     * }
     * @response 403 {
     *  "success": false,
     *  "message": "Usuário inativo"
     * }
     * @response 403 {
     *  "success": false,
     *  "message": "Usuário bloqueado"
     * }
     * @response 500 {
     *  "success": false,
     *  "message": "Erro ao realizar login",
     *  "error": "mensagem da exceção"
     * }
     */
    public function login(LoginUserRequest $request)
    {
        try {
            $validated = $request->validated();

            $user = SystemUser::where('email', $validated['email'])->first();

            if (! $user || ! Hash::check($validated['password'], $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Credenciais inválidas',
                ], 401);
            }

            if ($user->status !== 'Ativo') {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuário inativo',
                ], 403);
            }

            if ($user->status === 'Bloqueado') {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuário bloqueado',
                ], 403);
            }

            $token = $user->createToken('Mesominds personal access token')->accessToken;

            return response()->json([
                'success' => true,
                'message' => 'Login realizado com sucesso',
                'token' => $token,
                'user' => $user,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao realizar login',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->token()->revoke();

            return response()->json([
                'success' => true,
                'message' => 'Logout realizado com sucesso',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro a realizar logout',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function validateToken(Request $request)
    {
        try {
            $user = $request->user();

            if (! $user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token inválido ou expirado',
                ], 401);
            }

            $token = $user->token();

            if (! $token || $token->revoked) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token revogado',
                ], 401);
            }

            if ($token->expires_at && $token->expires_at->isPast()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token expirado',
                ], 401);
            }

            return response()->json([
                'success' => true,
                'message' => 'Token válido',
                'user' => $user,
                'expires_at' => $token->expires_at,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao validar token',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
