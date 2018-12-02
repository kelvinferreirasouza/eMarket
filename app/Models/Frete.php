<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    protected $fillable = [
        'estado', 'municipio', 'valor', 'isAtivo'
    ];

    protected $table = 'fretes';
}
