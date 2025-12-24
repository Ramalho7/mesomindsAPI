<?php

namespace App\Http\Controllers;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use App\Http\Requests\SystemUser\LoginUserRequest;
use App\Http\Requests\SystemUser\RegisterUserRequest;
use App\Models\SystemUser;
use App\Services\SystemUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use League\OAuth2\Server\AuthorizationServer;
use League\OAuth2\Server\Exception\OAuthServerException;
use Nyholm\Psr7\Response as Psr7Response;
use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AuthController extends Controller
{
    use AuthorizesRequests;

    public function __construct(
        protected SystemUserService $systemUserService,
        protected AuthorizationServer $authorizationServer,
    ) {}

    /**
     * Self-register de usuários na plataforma.
     *
     * @group Autenticação
     *
     * @response 201 {
     *  "success": true,
     *  "message": "Cadastro realizado com sucesso",
     *  "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...",
     *  "refresh_token": "def50200...",
     *  "expires_in": 1296000,
     *  "token_type": "Bearer",
     *  "user": {
     *    "id": "01JFXYZ...",
     *    "name": "Jessica Jones",
     *    "email": "jessica@example.com",
     *    "status": "active",
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
    public function register(RegisterUserRequest $request, ServerRequestInterface $serverRequest)
    {
        try {
            if ($request->user()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuários autenticados devem usar a rota /api/users para criar novos usuários',
                ], 403);
            }

            $dto = SystemUserCreateDTO::makeFromRequest($request);
            $this->authorize('selfRegister', $dto->role);

            $user = $this->systemUserService->create($dto, true);

            $tokenData = $this->issueToken($serverRequest, $request->email, $request->password);

            if (isset($tokenData['error'])) {
                $token = $user->generateToken();

                return response()->json([
                    'success' => true,
                    'message' => 'Cadastro realizado com sucesso',
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user,
                ], 201);
            }

            return response()->json([
                'success' => true,
                'message' => 'Cadastro realizado com sucesso',
                'access_token' => $tokenData['access_token'],
                'refresh_token' => $tokenData['refresh_token'],
                'expires_in' => $tokenData['expires_in'],
                'token_type' => $tokenData['token_type'],
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
     *  "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...",
     *  "refresh_token": "def50200...",
     *  "expires_in": 1296000,
     *  "token_type": "Bearer",
     *  "user": {
     *    "id": "01JFXYZ...",
     *    "name": "Jessica Jones",
     *    "email": "jessica@example.com",
     *    "status": "active",
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
     *  "message": "Usuário banido"
     * }
     * @response 500 {
     *  "success": false,
     *  "message": "Erro ao realizar login",
     *  "error": "mensagem da exceção"
     * }
     */
    public function login(LoginUserRequest $request, ServerRequestInterface $serverRequest)
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

            if ($user->status === SystemUserStatusEnum::BANNED) {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuário banido',
                ], 403);
            }

            if ($user->status !== SystemUserStatusEnum::ACTIVE) {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuário inativo',
                ], 403);
            }

            $tokenData = $this->issueToken($serverRequest, $validated['email'], $validated['password']);

            if (isset($tokenData['error'])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Erro ao gerar token',
                    'error' => $tokenData['error_description'] ?? $tokenData['error'],
                ], 401);
            }

            return response()->json([
                'success' => true,
                'message' => 'Login realizado com sucesso',
                'access_token' => $tokenData['access_token'],
                'refresh_token' => $tokenData['refresh_token'],
                'expires_in' => $tokenData['expires_in'],
                'token_type' => $tokenData['token_type'],
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

    /**
     * Renovar token de acesso usando refresh token.
     *
     * @group Autenticação
     *
     * @bodyParam refresh_token string required O refresh token. Example: def50200...
     *
     * @response 200 {
     *  "success": true,
     *  "message": "Token renovado com sucesso",
     *  "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...",
     *  "refresh_token": "def50200...",
     *  "expires_in": 1296000,
     *  "token_type": "Bearer"
     * }
     * @response 401 {
     *  "success": false,
     *  "message": "Refresh token inválido ou expirado"
     * }
     */
    public function refresh(Request $request, ServerRequestInterface $serverRequest)
    {
        try {
            $request->validate([
                'refresh_token' => 'required|string',
            ]);

            $tokenData = $this->issueRefreshToken($serverRequest, $request->refresh_token);

            if (isset($tokenData['error'])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Refresh token inválido ou expirado',
                    'error' => $tokenData['error_description'] ?? $tokenData['error'],
                ], 401);
            }

            return response()->json([
                'success' => true,
                'message' => 'Token renovado com sucesso',
                'access_token' => $tokenData['access_token'],
                'refresh_token' => $tokenData['refresh_token'],
                'expires_in' => $tokenData['expires_in'],
                'token_type' => $tokenData['token_type'],
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao renovar token',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Logout do usuário (revogar token).
     *
     * @group Autenticação
     *
     * @authenticated
     *
     * @response 200 {
     *  "success": true,
     *  "message": "Logout realizado com sucesso"
     * }
     */
    public function logout(Request $request)
    {
        try {
            $token = $request->user()->token();

            $token->revoke();

            DB::table('oauth_refresh_tokens')
                ->where('access_token_id', $token->id)
                ->update(['revoked' => true]);

            return response()->json([
                'success' => true,
                'message' => 'Logout realizado com sucesso',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao realizar logout',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Validar token de acesso.
     *
     * @group Autenticação
     *
     * @authenticated
     *
     * @response 200 {
     *  "success": true,
     *  "message": "Token válido",
     *  "user": {...},
     *  "expires_at": "2026-01-08T12:34:56.000000Z"
     * }
     * @response 401 {
     *  "success": false,
     *  "message": "Token inválido ou expirado"
     * }
     */
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

    /**
     * Emitir token OAuth2 usando Password Grant.
     */
    private function issueToken(ServerRequestInterface $serverRequest, string $username, string $password): array
    {
        $client = $this->getPasswordClient();

        if (! $client) {
            return ['error' => 'oauth_client_not_configured'];
        }

        $parsedBody = [
            'grant_type' => 'password',
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'username' => $username,
            'password' => $password,
            'scope' => '*',
        ];

        $serverRequest = $serverRequest->withParsedBody($parsedBody);

        return $this->respondToAccessTokenRequest($serverRequest);
    }

    /**
     * Emitir novo token usando Refresh Token.
     */
    private function issueRefreshToken(ServerRequestInterface $serverRequest, string $refreshToken): array
    {
        $client = $this->getPasswordClient();

        if (! $client) {
            return ['error' => 'oauth_client_not_configured'];
        }

        $parsedBody = [
            'grant_type' => 'refresh_token',
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'refresh_token' => $refreshToken,
            'scope' => '*',
        ];

        $serverRequest = $serverRequest->withParsedBody($parsedBody);

        return $this->respondToAccessTokenRequest($serverRequest);
    }

    /**
     * Processar requisição de token usando o AuthorizationServer.
     */
    private function respondToAccessTokenRequest(ServerRequestInterface $serverRequest): array
    {
        try {
            $response = $this->authorizationServer->respondToAccessTokenRequest(
                $serverRequest,
                new Psr7Response()
            );

            return json_decode((string) $response->getBody(), true);

        } catch (OAuthServerException $e) {
            return [
                'error' => $e->getErrorType(),
                'error_description' => $e->getMessage(),
            ];
        }
    }

    /**
     * Buscar cliente OAuth configurado para Password Grant.
     */
    private function getPasswordClient(): ?object
    {
        $clientId = config('passport.password_client_id');
        $clientSecret = config('passport.password_client_secret');

        if ($clientId && $clientSecret) {
            return (object) [
                'id' => $clientId,
                'secret' => $clientSecret,
            ];
        }

        // Fallback: busca no banco (só funciona se secret não estiver hasheado)
        return DB::table('oauth_clients')
            ->where('grant_types', 'like', '%password%')
            ->where('revoked', false)
            ->first();
    }
}
