<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'nome', 'isAtivo',
    ];

    protected $table = 'produtosetores';
}
