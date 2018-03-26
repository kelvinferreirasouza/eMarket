<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeiculoMarca extends Model
{
    protected $fillable = array('veiculoMarca', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'veiculomarca'; 
}
