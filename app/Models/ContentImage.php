<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'alt_text',
        'base64_data',
        'mime_type',
    ];

    protected $appends = ['full_base64'];

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'content_content_images', 'content_image_id', 'content_id')
            ->withPivot('order')
            ->orderBy('order');
    }

    public function getFullBase64Attribute()
    {
        if ($this->base64_data) {
            return "data:{$this->mime_type};base64,{$this->base64_data}";
        }

        return null;
    }
}
