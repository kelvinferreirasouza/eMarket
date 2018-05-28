<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeiculoModelo extends Model
{
    protected $fillable = [
        'modelo', 'veiculoMarcaId', 'isAtivo',
    ];

    protected $table = 'veiculomodelos';
}
