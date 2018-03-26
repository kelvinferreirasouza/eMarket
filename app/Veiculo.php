<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = array('veiculoMarcaId', 'veiculoModeloId', 'veiculoAno', 'veiculoPlaca', 'veiculoCor', 'veiculoRenavam', 'quilometragem', 'ultimaRevisao', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'veiculo'; 
}
