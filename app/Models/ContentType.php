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
        'criador',
        'ultimo_editor'
    ];

    public function content()
    {
        return $this->hasMany(Conteudo::class, 'post_type_id');
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
