<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class SystemUser extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens, HasFactory, HasUlids, Notifiable, SoftDeletes;
=======
    use HasApiTokens, HasFactory, HasUlids, Notifiable;
>>>>>>> 9cdf7a8 (Apply automatic changes - pint)

    protected $table = 'system_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'created_by',
        'updated_by',
        'status',
        'deleted_at',
    ];

    protected $hidden = [
        'role',
        'password',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function scopeName($query, $name)
    {
        return $query->whereFullText('name', $name);
    }

    public function scopeEmail($query, $email)
    {
        return $query->whereFullText('email', $email);
    }

    public function scopeRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
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

    // Existing methods
    public function findForPassport($username)
    {
        return $this->where('email', $username)->first();
    }

    public function creator()
    {
        return $this->belongsTo(SystemUser::class, 'created_by')->withTrashed();
    }

    public function updater()
    {
        return $this->belongsTo(SystemUser::class, 'updated_by')->withTrashed();
    }

    public function generateToken()
    {
        return $this->createToken('MesoMindsWebSiteToken')->accessToken;
    }
}
