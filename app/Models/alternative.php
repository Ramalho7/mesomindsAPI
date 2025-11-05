<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class alternative extends Model
{
    /** @use HasFactory<\Database\Factories\AlternativeFactory> */
    use HasFactory;

    protected $table = 'alternatives';

    protected $fillable = [
        'quesion_id',
        'content',
        'correct',
        'criador',
        'ultimo_editor'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(question::class);
    }
}
