<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentTag extends Model
{
    /** @use HasFactory<\Database\Factories\ContentTagFactory> */
    use HasFactory;

    protected $table = 'content_tags';

    protected $fillable = [
        'tag_name',
        'is_moderator_only',
        'count',
        'slug',
        'description',
        'created_by',
        'updated_by',
        'status',
    ];

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'content_tag_pivot', 'tag_id', 'content_id');
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
