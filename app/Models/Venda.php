<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'pedidoId', 'total', 'frete', 'data', 'status',
    ];

    protected $table = 'vendas';
}
