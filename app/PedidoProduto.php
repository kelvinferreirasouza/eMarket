<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
     protected $fillable = [
        'produtoId', 'pedidoId', 'qtd', 'valor', 'valorDesconto', 'valorAcrescimo', 'valorTotal', 'isAtivo'
    ];

    protected $table = 'pedidoprodutos';

    public function produto() {
        return $this->belongsTo('App\Produto', 'produtoId' );
    }

    public function pedido() {
        return $this->belongsTo('App\Pedido', 'pedidoId' );
    }
}
