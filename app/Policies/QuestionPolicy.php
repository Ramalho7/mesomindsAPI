<?php

namespace App\Policies;

use App\Models\Question;
use App\Models\SystemUser;

class QuestionPolicy
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
    public function view(?SystemUser $systemUser, Question $question): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(SystemUser $systemUser): bool
    {
        return in_array($systemUser->role, ['admin', 'moderator', 'operator']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(SystemUser $systemUser, Question $question): bool
    {
        return in_array($systemUser->role, ['admin', 'moderator', 'operator']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(SystemUser $systemUser, Question $question): bool
    {
        return $systemUser->role === 'ADM';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(SystemUser $systemUser, Question $question): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(SystemUser $systemUser, Question $question): bool
    {
        return $systemUser->role === 'admin';
    }

    public function changeStatus(SystemUser $systemUser, Question $question): bool
    {
        return in_array($systemUser->role, ['admin', 'moderator']);
    }
}
