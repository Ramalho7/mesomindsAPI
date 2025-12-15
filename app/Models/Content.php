<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /** @use HasFactory<\Database\Factories\ContentFactory> */
    use HasFactory;

    protected $table = 'contents';

    protected $fillable = [
        'title',
        'body',
        'created_by',
        'updated_by',
        'image_id',
        'content_types_id',
        'content_tags_id',
        'status',
        'id_materia',
        'content_tags_id',
        'content_types_id',
        'published_at',
        'duration_minutes',
        'deleted_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'published_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function contentType()
    {
        return $this->belongsTo(ContentType::class, 'content_types_id');
    }

    public function contentTags()
    {
        return $this->belongsToMany(ContentTag::class, 'content_tag_pivot', 'content_id', 'tag_id');
    }

    public function images()
    {
        return $this->belongsToMany(ContentImage::class, 'content_content_images', 'content_id', 'content_image_id')
            ->withPivot('order')
            ->orderBy('order');
    }

    public function creator()
    {
        return $this->belongsTo(SystemUser::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(SystemUser::class, 'updated_by');
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

    public function scopeContentType($query, ?string $contentType)
    {
        if ($contentType !== null && $contentType !== '') {
            return $query->whereHas('contentType', function ($q) use ($contentType) {
                $q->where('title', 'like', "%{$contentType}%");
            });
        }

        return $query;
    }

    public function scopeContentTag($query, ?string $contentTag)
    {
        if ($contentTag !== null && $contentTag !== '') {
            return $query->whereHas('contentTags', function ($q) use ($contentTag) {
                $q->where('tag_name', 'like', "%{$contentTag}%");
            });
        }

        return $query;
    }
}
