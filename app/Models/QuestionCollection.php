<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionCollection extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionCollectionFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'subject_id',
        'type',
        'due_date',
        'created_by',
        'updated_by',
        'status',
    ];

    protected $casts = [
        'due_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the subject that owns the collection
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Materias::class, 'subject_id');
    }

    /**
     * Get the user who created the collection
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'created_by');
    }

    /**
     * Get the user who last updated the collection
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'updated_by');
    }

    /**
     * Get all questions in this collection
     */
    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'question_colletion_pivot', 'collection_id', 'question_id')
            ->where('questions.status', 'Active')
            ->withPivot('status', 'order', 'created_by', 'updated_by', 'created_at', 'updated_at')
            ->orderBy('question_colletion_pivot.order');
    }

}