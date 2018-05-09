<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [
        'descricao', 'isAtivo',
    ];

    protected $table = 'funcionariocargos';
}
