<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
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
        'type',
        'correction',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime',
    ];

    public function alternatives(): HasMany
    {
        return $this->hasMany(Alternative::class, 'question_id');
    }

    public function materia(): BelongsTo
    {
        return $this->belongsTo(Materias::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'created_by');
    }

    public function lastEditor(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'updated_by');
    }

    public function studentAnswers(): HasMany
    {
        return $this->hasMany(StudentAnswer::class);
    }

    public function scopeStatus($query, string $status)
    {
        return $query->where('status', $status);
    }

    public function scopeSearch($query, ?string $search = null)
    {
        if (! empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        return $query;
    }

    public function scopeType($query, ?string $type)
    {
        if ($type !== null && $type !== '') {
            return $query->where('type', $type);
        }

        return $query;
    }
}
