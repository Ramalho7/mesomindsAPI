<?php

namespace App\Http\Controllers;

use App\Models\SystemUser;
use Illuminate\Http\Request;

class MeController extends Controller
{
    /**
     * Retorna as informações do usuário autenticado junto com suas habilidades.
     *
     * @group Usuários
     *
     * @response 200 {
     *  "success": true,
     *  "id": 4,
     *  "name": "Jessica Jones",
     *  "email": "jessica.jones@example.com",
     *  "status": "active",
     *  "abilities": {
     *    "users": {
     *      "view": {
     *        "self": true,
     *        "any": false
     *      },
     *      "create": false,
     *      "update": {
     *        "self": true,
     *        "any": false
     *      },
     *      "delete": {
     *        "self": false,
     *        "any": false
     *      }
     *    }
     *  }
     * }
     *
     * @response 401 {
     *  "success": false,
     *  "message": "Não autenticado. Token inválido ou ausente.."
     * }
     *
     * 
     */
    public function me(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'success' => true,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'status' => $user->status,

            'abilities' => [
                'users' => [
                    'view' => [
                        'self' => $user->can('view', $user),
                        'any' => $user->can('viewAny', SystemUser::class),
                    ],
                    'create' => $user->can('create', SystemUser::class),
                    'update' => [
                        'self' => $user->can('update', $user),
                        'any' => $user->can('updateAny', SystemUser::class),
                    ],
                    'delete' => [
                        'self' => $user->can('delete', $user),
                        'any' => $user->can('deleteAny', SystemUser::class),
                    ],
                ],
            ],
        ]);
    }
}
