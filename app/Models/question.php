<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'title',
        'content',
        'materia',
        'ultimo_editor',
        'criador',
        'status',
        'type'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime',
    ];

    public function alternatives(): HasMany
    {
        return $this->hasMany(alternative::class, 'question_id');
    }

    public function materia(): BelongsTo
    {
        return $this->belongsTo(Materias::class);
    }
}
