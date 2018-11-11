<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class Cliente extends Authenticatable
{

    protected $guard = 'clientes';

    protected $fillable = [
        'nome', 'email', 'password', 'cpf', 'rg', 'sexo', 'dataNasc', 'cep', 'logradouro', 'numero', 'complemento','bairro', 'estado', 'municipio', 'fone', 'celular', 'provider', 'provider_id', 'isAtivo'
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
    
    public function profileUpdate(array $data){
        $this->update($data);
    }
    
    public function pedidos(){
        $this->hasMany(\App\Pedido::class);
    }
    
    public function getClienteAuth(){
        
        $clienteAuth = Auth::guard('clientes')->user();
        
        return $clienteAuth;
    }
}
