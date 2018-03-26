<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = array('usrEmail', 'usrPassword', 'dataCadastro', 'horaCadastro', 'dataUltimaCompra', 'isAtivo');

    protected $table = 'usuario';
}
