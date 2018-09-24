<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Authenticatable
{

    protected $guard = 'clientes';

    protected $fillable = [
        'nome', 'email', 'password', 'cpf', 'rg', 'sexo', 'dataNasc', 'cep', 'logradouro', 'numero', 'complemento','bairro', 'estado', 'municipio', 'fone', 'celular', 'isAtivo'
    ];
 
    protected $hidden = [
        'password'
    ];
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('nome', 'LIKE', "%{$keySearch}%")
                ->orWhere('email', 'LIKE', "%{$keySearch}%")
                ->orWhere('cpf', 'LIKE', "%{$keySearch}%")
                ->orWhere('rg', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
