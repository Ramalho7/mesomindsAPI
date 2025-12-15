<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    /** @use HasFactory<\Database\Factories\ContentTypeFactory> */
    use HasFactory;

    protected $table = 'content_types';

    protected $fillable = [
        'title',
        'description',
        'created_by',
        'status',
        'updated_by',
    ];

    public function content()
    {
        return $this->hasMany(Content::class, 'content_type_id');
    }

    public function creator()
    {
        return $this->belongsTo(SystemUser::class, 'created_by');
    }

    public function lastEditor()
    {
        return $this->belongsTo(SystemUser::class, 'updated_by');
    }
}
