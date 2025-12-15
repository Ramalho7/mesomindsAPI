<?php

namespace App\Policies;

use App\Models\SystemUser;

/**
 * Policy para gerenciar permissões relacionadas ao modelo SystemUser.
 *
 * Métodos disponíveis:
 * - `viewAny`: Determina se o usuário pode visualizar a lista de usuários.
 * - `view`: Determina se o usuário pode visualizar um usuário específico.
 * - `create`: Determina se o usuário pode criar novos usuários.
 * - `update`: Determina se o usuário pode atualizar um usuário específico.
 * - `updatePassword`: Determina se o usuário pode atualizar a senha de um usuário específico.
 * - `delete`: Determina se o usuário pode excluir um usuário específico.
 * - `restore`: Determina se o usuário pode restaurar um usuário excluído.
 * - `forceDelete`: Determina se o usuário pode excluir permanentemente um usuário.
 */
class SystemUserPolicy
{
    /**
     * Determina se o usuário pode visualizar a lista de usuários.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @return bool Retorna `true` se o usuário for um administrador.
     */
    public function viewAny(SystemUser $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determina se o usuário pode visualizar um usuário específico.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser visualizado.
     * @return bool Retorna `true` se o usuário for administrador ou se estiver visualizando seu próprio registro.
     */
    public function view(SystemUser $user, ?SystemUser $systemUser = null): bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        if ($systemUser === null) {
            return false;
        }

        return $user->id === $systemUser->id;
    }

    /**
     * Determina se o usuário pode criar novos usuários.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @return bool Retorna `true` se o usuário for administrador.
     */
    public function create(SystemUser $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determina se o usuário pode atualizar um usuário específico.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser atualizado.
     * @return bool Retorna `true` se o usuário for administrador ou se estiver atualizando seu próprio registro.
     */
    public function update(SystemUser $user, ?SystemUser $systemUser = null): bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        if ($systemUser === null) {
            return false;
        }

        return $user->id === $systemUser->id;
    }

    /**
     * Determina se o usuário pode atualizar a senha de um usuário específico.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário cuja senha será atualizada.
     * @return bool Retorna `true` se o usuário for administrador ou se estiver atualizando sua própria senha.
     */
    public function updatePassword(SystemUser $user, ?SystemUser $systemUser): bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        if ($systemUser === null) {
            return false;
        }

        return $user->id === $systemUser->id;
    }

    public function updateAny(SystemUser $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determina se o usuário pode excluir um usuário específico.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser excluído.
     * @return bool Retorna `true` se o usuário for administrador ou se estiver excluindo seu próprio registro.
     */
    public function delete(SystemUser $user, SystemUser $systemUser): bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        return $user->id === $systemUser->id;
    }

    public function deleteAny(SystemUser $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determina se o usuário pode restaurar um usuário excluído.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser restaurado.
     * @return bool Retorna `false` (não permitido).
     */
    public function restore(SystemUser $user, SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determina se o usuário pode excluir permanentemente um usuário.
     *
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser excluído permanentemente.
     * @return bool Retorna `true` se o usuário for administrador ou se estiver excluindo permanentemente seu próprio registro.
     */
    public function forceDelete(SystemUser $user, ?SystemUser $systemUser = null): bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        if ($systemUser === null) {
            return false;
        }

        return $user->id === $systemUser->id;
    }
}
