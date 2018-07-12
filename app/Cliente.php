<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'email', 'senha', 'cpf', 'rg', 'sexo', 'dataNasc', 'cep', 'logradouro', 'numero', 'bairro', 'estado', 'municipio', 'fone', 'celular', 'isAtivo'
    ];
 
    protected $hidden = [
        'senha'
    ];	
}
