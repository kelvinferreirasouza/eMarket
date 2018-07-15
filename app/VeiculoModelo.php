<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeiculoModelo extends Model
{
    protected $fillable = [
        'modelo', 'veiculoMarcaId', 'isAtivo',
    ];

    protected $table = 'veiculomodelos';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('modelo', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }
}
