<?php

namespace App\Traits;

trait SystemUserScopes
{
    public function scopeName($query, $name)
    {
        if (config('database.default') === 'mysql') {
            return $query->whereFullText('name', $name);
        }

        return $query->where('name', 'LIKE', "%{$name}%");
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeEmail($query, $email)
    {
        if (config('database.default') === 'mysql') {
            return $query->whereFullText('email', $email);
        }

        return $query->where('email', 'LIKE', "%{$email}%");
    }

    public function scopeRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function scopeCreatedAt($query, $date)
    {
        return $query->whereDate('created_at', $date);
    }

    public function scopeUpdatedAt($query, $date)
    {
        return $query->whereDate('updated_at', $date);
    }

    public function scopeDeletedAt($query, $date)
    {
        return $query->whereDate('deleted_at', $date);
    }

    public function scopeCreatedBy($query, $userId)
    {
        return $query->where('created_by', $userId);
    }

    public function scopeUpdatedBy($query, $userId)
    {
        return $query->where('updated_by', $userId);
    }
}
