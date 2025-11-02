<?php

namespace App\Policies;

use App\Models\Content;
use App\Models\SystemUser;

class ContentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(SystemUser $systemUser): bool
    {
        return in_array($systemUser->tipo, ['Professor', 'Aluno', 'ADM', 'Moderador', 'Operador']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(SystemUser $systemUser, Content $content): bool
    {
        return in_array($systemUser->tipo, ['Professor', 'Aluno', 'ADM', 'Moderador', 'Operador']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(SystemUser $systemUser): bool
    {
        return in_array($systemUser->tipo, ['ADM', 'Moderador', 'Operador']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(SystemUser $systemUser, Content $content): bool
    {
        return in_array($systemUser->tipo, ['ADM', 'Moderador', 'Operador']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(SystemUser $systemUser, Content $content): bool
    {
        return $systemUser->tipo === 'ADM';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(SystemUser $systemUser, Content $content): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(SystemUser $systemUser, Content $content): bool
    {
        return $systemUser->tipo === 'ADM';
    }

    public function changeStatus(SystemUser $systemUser, Content $content): bool
    {
        return in_array($systemUser->tipo, ['ADM', 'Moderador']);
    }
}
