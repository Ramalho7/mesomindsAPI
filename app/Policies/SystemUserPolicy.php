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
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
=======
     * @param SystemUser $user Usuário autenticado.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `true` se o usuário for um administrador.
     */
    public function viewAny(SystemUser $user): bool
    {
<<<<<<< HEAD
        return $user->role === 'admin';
=======
        return $user->tipo === 'admin';
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
    }

    /**
     * Determina se o usuário pode visualizar um usuário específico.
     *
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser visualizado.
=======
     * @param SystemUser $user Usuário autenticado.
     * @param SystemUser $systemUser Usuário a ser visualizado.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `true` se o usuário for administrador ou se estiver visualizando seu próprio registro.
     */
    public function view(SystemUser $user, ?SystemUser $systemUser = null): bool
    {
<<<<<<< HEAD
        if ($user->role === 'admin') {
=======
        if ($user->tipo === 'admin') {
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
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
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
=======
     * @param SystemUser $user Usuário autenticado.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `true` se o usuário for administrador.
     */
    public function create(SystemUser $user): bool
    {
<<<<<<< HEAD
        return $user->role === 'admin';
=======
        return $user->tipo === 'admin';
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
    }

    /**
     * Determina se o usuário pode atualizar um usuário específico.
     *
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser atualizado.
=======
     * @param SystemUser $user Usuário autenticado.
     * @param SystemUser $systemUser Usuário a ser atualizado.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `true` se o usuário for administrador ou se estiver atualizando seu próprio registro.
     */
    public function update(SystemUser $user, ?SystemUser $systemUser = null): bool
    {
<<<<<<< HEAD
        if ($user->role === 'admin') {
=======
        if ($user->tipo === 'admin') {
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
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
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário cuja senha será atualizada.
=======
     * @param SystemUser $user Usuário autenticado.
     * @param SystemUser $systemUser Usuário cuja senha será atualizada.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `true` se o usuário for administrador ou se estiver atualizando sua própria senha.
     */
<<<<<<< HEAD
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

=======
    public function updatePassword(SystemUser $user, SystemUser $systemUser): bool
    {
        if ($user->tipo === 'admin') {
            return true;
        }

        return $user->id === $systemUser->id;
    }

>>>>>>> f4d92fb (Adicionado ULID para user (#100))
    /**
     * Determina se o usuário pode excluir um usuário específico.
     *
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser excluído.
=======
     * @param SystemUser $user Usuário autenticado.
     * @param SystemUser $systemUser Usuário a ser excluído.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `true` se o usuário for administrador ou se estiver excluindo seu próprio registro.
     */
    public function delete(SystemUser $user, SystemUser $systemUser): bool
    {
<<<<<<< HEAD
        if ($user->role === 'admin') {
=======
        if ($user->tipo === 'admin') {
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
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
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser restaurado.
=======
     * @param SystemUser $user Usuário autenticado.
     * @param SystemUser $systemUser Usuário a ser restaurado.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `false` (não permitido).
     */
    public function restore(SystemUser $user, SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determina se o usuário pode excluir permanentemente um usuário.
     *
<<<<<<< HEAD
     * @param  SystemUser  $user  Usuário autenticado.
     * @param  SystemUser  $systemUser  Usuário a ser excluído permanentemente.
=======
     * @param SystemUser $user Usuário autenticado.
     * @param SystemUser $systemUser Usuário a ser excluído permanentemente.
>>>>>>> fef381f (Adicionado ULID para user)
     * @return bool Retorna `true` se o usuário for administrador ou se estiver excluindo permanentemente seu próprio registro.
     */
    public function forceDelete(SystemUser $user, ?SystemUser $systemUser = null): bool
    {
<<<<<<< HEAD
        if ($user->role === 'admin') {
=======
        if ($user->tipo === 'admin') {
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
            return true;
        }

        if ($systemUser === null) {
            return false;
        }

        return $user->id === $systemUser->id;
    }
}
