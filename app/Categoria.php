<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome', 'produtoSetorId', 'isAtivo',
    ];

    protected $table = 'produtocategorias';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('nome', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
