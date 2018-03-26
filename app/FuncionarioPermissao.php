<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncionarioPermissao extends Model
{
    protected $fillable = array('funcCargoId', 'moduloId', 'consultar','atualizar', 'incluir', 'excluir');

    protected $table = 'funcionariopermissao';
}
