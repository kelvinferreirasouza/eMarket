<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = [
        'unidade', 'sigla', 'isAtivo',
    ];

    protected $table = 'produtounidades';
}
