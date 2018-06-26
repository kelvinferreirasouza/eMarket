<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeiculoMarca extends Model
{
    protected $fillable = [
        'marca', 'isAtivo',
    ];

    protected $table = 'veiculomarcas';
}
