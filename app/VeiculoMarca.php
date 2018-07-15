<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeiculoMarca extends Model
{
    protected $fillable = [
        'marca', 'isAtivo',
    ];

    protected $table = 'veiculomarcas';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('marca', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
