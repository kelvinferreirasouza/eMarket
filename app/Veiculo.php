<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'veiculoMarcaId', 'veiculoModeloId', 'ano', 'placa', 'renavam', 'cor','isAtivo',
    ];

    protected $table = 'veiculos';
    
    public function pesquisa($request){
        $keySearch = $request->key_search;
        
        return $this->where('placa', 'LIKE', "%{$keySearch}%")
                ->orWhere('renavam', 'LIKE', "%{$keySearch}%")
                ->paginate(10);
    }   
}
