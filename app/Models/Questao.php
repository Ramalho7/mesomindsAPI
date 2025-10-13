<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Questao extends Model
{
    use HasFactory;

    protected $table = 'questoes';

    protected $fillable = [
        'titulo',
        'corpo',
        'materia',
        'ultimo_editor',
        'criador',
        'tipo',
        'status'
    ];

    public function alternativas(): HasMany
    {
        return $this->hasMany(Alternativa::class, 'questao');
    }

    public function materia(): BelongsTo
    {
        return $this->belongsTo(Materia::class);
    }
}
