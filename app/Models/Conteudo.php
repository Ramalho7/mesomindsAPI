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
        'nome',
        'corpo',
        'criador',
        'status',
        'id_materia',
        'ultimo_editor',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function contentType()
    {
        return $this->belongsTo(ContentType::class, 'post_type_id');
    }
}
