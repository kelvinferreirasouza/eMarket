<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamentos extends Model
{
    protected $fillable = array('formaPagamento', 'empresaId', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'formapagamentos';
}
