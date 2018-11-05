<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    protected $fillable = [
        'estado', 'municipio', 'valor'
    ];

    protected $table = 'fretes';
}
