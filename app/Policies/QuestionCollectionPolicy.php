<?php

namespace App\Policies;

use App\Models\QuestionCollection;
use App\Models\SystemUser;

class QuestionCollectionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?SystemUser $systemUser): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?SystemUser $systemUser, QuestionCollection $questionCollection): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(SystemUser $systemUser): bool
    {
        return in_array($systemUser->role, ['ADM', 'Moderador', 'Operador']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(SystemUser $systemUser, QuestionCollection $questionCollection): bool
    {
        return in_array($systemUser->role, ['ADM', 'Moderador', 'Operador']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(SystemUser $systemUser, QuestionCollection $questionCollection): bool
    {
        return $systemUser->role === 'ADM';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(SystemUser $systemUser, QuestionCollection $questionCollection): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(SystemUser $systemUser, QuestionCollection $questionCollection): bool
    {
        return $systemUser->role === 'ADM';
    }

    public function changeStatus(SystemUser $systemUser, QuestionCollection $questionCollection): bool
    {
        return in_array($systemUser->role, ['ADM', 'Moderador']);
    }
}
