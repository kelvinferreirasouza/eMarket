<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable = [
        'nome', 'produtoCategoriaId', 'isAtivo',
    ];

    protected $table = 'produtosubcategorias';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('nome', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
