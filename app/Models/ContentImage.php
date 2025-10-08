<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentImage extends Model
{
    /** @use HasFactory<\Database\Factories\ContentImageFactory> */
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'alt_text',
    ];

    public function conteudos()
    {
        return $this->hasMany(Conteudo::class, 'image_id');
    }
}
