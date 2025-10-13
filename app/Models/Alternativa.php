<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Testing\Fluent\Concerns\Has;

class Alternativa extends Model
{
    use HasFactory;
    protected $table = 'alternativas';

    protected $fillable = [
        'questao',
        'valor',
        'correta',
        'criador'

    ];

    public function questao(): BelongsTo
    {
        return $this->belongsTo(Questao::class);
    }
}
