<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticable;


class Pessoas extends Authenticable
{
    protected $fillable = array('nomeRazaoSocial', 'nomeFantasia', 'cpfCnpj', 'email', 'password',
                                'fone', 'sexo','dataNasc', 'isAtivo');

    protected $table = 'pessoas';
}
