<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $fillable = array('nomeRazaoSocial', 'nomeFantasia', 'cpfCnpj', 'rgIe', 'email','dataNasc',
                                'sexoId', 'cep', 'lagradouro', 'numero', 'bairro', 'estado', 'municipio',
                                'pais', 'fone', 'celular', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'pessoas';
}
