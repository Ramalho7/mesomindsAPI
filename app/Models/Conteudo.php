<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    /** @use HasFactory<\Database\Factories\ConteudoFactory> */
    use HasFactory;

    protected $table = 'conteudos';

    protected $fillable = [
        'title',
        'content',
        'criador',
        'image_id',
        'content_types_id',
        'content_tags_id',
        'status',
        'id_materia',
        'ultimo_editor',
        'content_tags_id',
        'content_types_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function contentType()
    {
        return $this->belongsTo(ContentType::class, 'post_types_id');
    }

    public function contentTag()
    {
        return $this->belongsTo(ContentTag::class, 'content_tags_id');
    }

    public function contentImage()
    {
        return $this->belongsTo(ContentImage::class, 'image_id');
    }

    public function creator()
    {
        return $this->belongsTo(SystemUser::class, 'criador');
    }

    public function lastEditor()
    {
        return $this->belongsTo(SystemUser::class, 'ultimo_editor');
    }
}
