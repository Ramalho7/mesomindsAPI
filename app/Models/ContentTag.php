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
        'criador',
        'description',
        'ultimo_editor'
    ];

    public function content()
    {
        return $this->hasMany(Conteudo::class, 'content_tags_id');
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
