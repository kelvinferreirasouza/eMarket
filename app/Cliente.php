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
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('nome', 'LIKE', "%{$keySearch}%")
                ->orWhere('email', 'LIKE', "%{$keySearch}%")
                ->orWhere('cpf', 'LIKE', "%{$keySearch}%")
                ->orWhere('rg', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
