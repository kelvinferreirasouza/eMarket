<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $fillable = array('razaoSocial', 'nomeFantasia', 'cnpj', 'ie', 'cep', 'lagradouro',
                                'numero', 'complemento', 'bairro', 'estado', 'municipio', 'pais',
                                'fone', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'empresas';
}
