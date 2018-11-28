<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Usuario extends Authenticatable
{
    use Notifiable;
     
    protected $fillable = [
        'nome', 'email', 'password', 'cargoId' ,'cpf', 'rg','sexo', 'dataNasc', 'cep', 'logradouro', 'numero', 'bairro', 'estado', 'municipio', 'fone', 'celular', 'isAtivo'
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
                ->orWhere('dataNasc', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}