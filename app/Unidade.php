<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = [
        'descricao', 'sigla', 'isAtivo',
    ];

    protected $table = 'produtounidades';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('descricao', 'LIKE', "%{$keySearch}%")
                ->orWhere('sigla', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
