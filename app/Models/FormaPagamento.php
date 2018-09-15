<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'isAtivo',
    ];

    protected $table = 'formapagamentos';
}
