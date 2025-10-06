<?php

namespace App\Policies;

use App\Models\SystemUser;
use Illuminate\Auth\Access\Response;

class SystemUserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(SystemUser $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(SystemUser $user, SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(SystemUser $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(SystemUser $user, SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(SystemUser $user, SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(SystemUser $user, SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(SystemUser $user, SystemUser $systemUser): bool
    {
        return false;
    }
}