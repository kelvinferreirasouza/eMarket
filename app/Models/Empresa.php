<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'razaoSocial', 'nomeFantasia', 'cnpj', 'ie', 'cep', 'lagradouro', 'numero', 'complemento', 'bairro', 'estado', 'municipio', 'fone', 'isAtivo',
    ];

    protected $table = 'empresas';
}
