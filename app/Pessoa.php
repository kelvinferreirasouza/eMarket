<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = array('nomeRazaoSocial', 'nomeFantasia', 'cpfCnpj', 'rgIe', 'dataNasc', 'sexoId', 'cep', 'lagradouro', 'numero', 'bairro', 'estado', 'municipio', 'pais', 'fone', 'celular', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'pessoa';
}
