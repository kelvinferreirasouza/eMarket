<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncionarioPermissoes extends Model
{
    protected $fillable = array('funcCargoId', 'moduloId', 'consultar','atualizar', 'incluir', 'excluir');

    protected $table = 'funcionariopermissoes';
}
