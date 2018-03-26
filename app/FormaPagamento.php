<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = array('formaPagamento', 'empresaId', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'formapagamento';
}
