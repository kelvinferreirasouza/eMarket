<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [
        'nome','descricao', 'isAtivo',
    ];

    protected $table = 'usuariocargos';
}
