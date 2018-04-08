<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeiculoMarcas extends Model
{
    protected $fillable = array('veiculoMarca', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'veiculomarcas'; 
}
