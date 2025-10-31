<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class SystemUser extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'system_users';

    protected $fillable = [
        'nome',
        'email',
        'password',
        'tipo',
        'criador',
        'ultimo_editor',
        'status'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function findForPassport($username)
    {
        return $this->where('email', $username)->first();
    }

    public function creator()
    {
        return $this->belongsTo(self::class, 'criador');
    }

    public function lastEditor()
    {
        return $this->belongsTo(self::class, 'ultimo_editor');
    }

    public function generateToken()
    {
        return $this->createToken('MesoMindsWebSiteToken')->accessToken;
    }
}
