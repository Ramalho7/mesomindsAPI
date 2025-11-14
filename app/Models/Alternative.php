<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alternative extends Model
{
    /** @use HasFactory<\Database\Factories\AlternativeFactory> */
    use HasFactory;

    protected $table = 'alternatives';

    protected $fillable = [
        'question_id',
        'content',
        'correct',
        'criador',
        'ultimo_editor'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'criador');
    }

    public function lastEditor(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'ultimo_editor');
    }
}
