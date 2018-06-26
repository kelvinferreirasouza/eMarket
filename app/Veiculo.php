<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'veiculoMarcaId', 'veiculoModeloId', 'ano', 'placa', 'renavam', 'cor','isAtivo',
    ];

    protected $table = 'veiculos';
}
