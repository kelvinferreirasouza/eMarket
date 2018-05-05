<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome', 'produtoSetorId', 'isAtivo',
    ];

    protected $table = 'produtocategorias';
}
