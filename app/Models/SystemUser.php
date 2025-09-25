<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ...existing code...
class SystemUser extends Model
{
    // ...existing code...
    use HasFactory;

    protected $table = 'system_users';

    protected $fillable = [
        'nome',
        'email',
        'password',
        'cpf',
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

    public function creator()
    {
        return $this->belongsTo(self::class, 'criador');
    }

    public function lastEditor()
    {
        return $this->belongsTo(self::class, 'ultimo_editor');
    }
}
