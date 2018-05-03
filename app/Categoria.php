<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome', 'produto_setor_id', 'isAtivo',
    ];

    protected $table = 'produtocategorias';
}
