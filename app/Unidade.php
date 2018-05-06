<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = [
        'descricao', 'sigla', 'isAtivo',
    ];

    protected $table = 'produtounidades';
}
