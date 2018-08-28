<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'nome', 'imagem','isAtivo',
    ];

    protected $table = 'produtosetores';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('nome', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
