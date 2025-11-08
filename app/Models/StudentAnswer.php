<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'question_id',
        'collection_id',
        'answer',
        'score',
        'feedback',
        'corrected_by',
        'submitted_at',
        'corrected_at',
        'status',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
        'corrected_at' => 'datetime',
        'score' => 'decimal:2',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'student_id');
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function collection(): BelongsTo
    {
        return $this->belongsTo(QuestionCollection::class);
    }

    public function corrector(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'corrected_by');
    }
}
