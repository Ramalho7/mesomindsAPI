<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    /** @use HasFactory<\Database\Factories\MateriasFactory> */
    use HasFactory;

    protected $table = 'materias';

    protected $fillable = [
        'nome',
        'descricao',
        'created_by',
        'status',
        'updated_by',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function creator()
    {
        return $this->belongsTo(SystemUser::class, 'created_by');
    }

    public function lastEditor()
    {
        return $this->belongsTo(SystemUser::class, 'updated_by');
    }
}
