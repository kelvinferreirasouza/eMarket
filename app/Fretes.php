<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fretes extends Model
{
    protected $fillable = array('freteNome', 'freteValor', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'fretes';
}
