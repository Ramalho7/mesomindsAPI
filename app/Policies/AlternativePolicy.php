<?php

namespace App\Policies;

use App\Models\Alternative;
use App\Models\SystemUser;

class AlternativePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(SystemUser $systemUser): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(SystemUser $systemUser, Alternative $alternative): bool
    {
        return true;
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
    public function update(SystemUser $systemUser, Alternative $alternative): bool
    {
        return in_array($systemUser->tipo, ['ADM', 'Moderador', 'Operador']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(SystemUser $systemUser, Alternative $alternative): bool
    {
        return $systemUser->tipo === 'ADM';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(SystemUser $systemUser, Alternative $alternative): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(SystemUser $systemUser, Alternative $alternative): bool
    {
        return $systemUser->tipo === 'ADM';
    }
}
