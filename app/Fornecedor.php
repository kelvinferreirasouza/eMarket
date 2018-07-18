<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = [
        'razaoSocial', 'nomeFantasia', 'cpfCnpj', 'ieRg', 'email', 'cep', 'logradouro', 'numero', 'bairro', 'municipio', 'estado', 'fone', 'isAtivo',
    ];

    protected $table = 'fornecedores';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('nomeFantasia', 'LIKE', "%{$keySearch}%")
                ->orWhere('razaoSocial', 'LIKE', "%{$keySearch}%")
                ->orWhere('cpfCnpj', 'LIKE', "%{$keySearch}%")
                ->orWhere('ieRG', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
