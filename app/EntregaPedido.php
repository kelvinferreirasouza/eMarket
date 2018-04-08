<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntregaPedido extends Model
{
    protected $fillable = array('freteId', 'funcId', 'veiculoId', 'pedidoId', 'dataSaida', 'horaSaida');

    protected $table = 'entregapedidos';
}
