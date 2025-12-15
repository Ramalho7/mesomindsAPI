<?php

namespace App\Policies;

use App\Models\Content;
use App\Models\SystemUser;

class ContentPolicy
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
    public function view(?SystemUser $systemUser, Content $content): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(SystemUser $systemUser): bool
    {
<<<<<<< HEAD
        return in_array($systemUser->role, ['admin', 'moderator', 'operator']);
=======
        return in_array($systemUser->tipo, ['admin', 'moderator', 'operator']);
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(SystemUser $systemUser, Content $content): bool
    {
<<<<<<< HEAD
        return in_array($systemUser->role, ['admin', 'moderator', 'operator']);
=======
        return in_array($systemUser->tipo, ['admin', 'moderator', 'operator']);
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(SystemUser $systemUser, Content $content): bool
    {
<<<<<<< HEAD
        return $systemUser->role === 'admin';
=======
        return $systemUser->tipo === 'admin';
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
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
<<<<<<< HEAD
        return $systemUser->role === 'admin';
=======
        return $systemUser->tipo === 'admin';
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
    }

    public function changeStatus(SystemUser $systemUser, Content $content): bool
    {
<<<<<<< HEAD
        return in_array($systemUser->role, ['admin', 'moderator']);
=======
        return in_array($systemUser->tipo, ['admin', 'moderator']);
>>>>>>> f4d92fb (Adicionado ULID para user (#100))
    }
}
