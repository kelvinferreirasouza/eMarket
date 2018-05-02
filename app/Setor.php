<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'produtoSetor', 'isAtivo',
    ];

    protected $table = 'produtosetores';
}
