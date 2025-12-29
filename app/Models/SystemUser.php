<?php

namespace App\Models;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use App\Notifications\CustomResetPasswordNotification;
use App\Notifications\CustomVerifyEmail;
use App\Traits\SystemUserScopes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class SystemUser extends Authenticatable implements MustVerifyEmail
{
    use CanResetPassword, HasApiTokens, HasFactory, HasUlids, Notifiable, SoftDeletes, SystemUserScopes;

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
        'email_verified_at',
    ];

    protected $hidden = [
        'role',
        'password',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'role' => SystemUserRoleEnum::class,
        'status' => SystemUserStatusEnum::class,
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token, $this->email));
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new CustomVerifyEmail);
    }

    public function findForPassport($username)
    {
        return $this->where('email', $username)->first();
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'created_by')->withTrashed();
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'updated_by')->withTrashed();
    }

    public function generateToken()
    {
        return $this->createToken('MesoMindsWebSiteToken')->accessToken;
    }
}
