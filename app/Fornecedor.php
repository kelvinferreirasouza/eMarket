<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = [
        'razaoSocial', 'nomeFantasia', 'cnpj', 'ie', 'email', 'cep', 'lagradouro', 'numero', 'bairro', 'municipio', 'estado', 'fone', 'isAtivo',
    ];

    protected $table = 'fornecedores';
}
