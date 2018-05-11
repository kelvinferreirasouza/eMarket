<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable = [
        'nome', 'produtoCategoriaId', 'isAtivo',
    ];

    protected $table = 'produtosubcategorias';
}
