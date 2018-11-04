<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
     protected $fillable = [
        'produto_id', 'pedido_id', 'qtd', 'valor'
    ];

    protected $table = 'pedidoprodutos';

    public function produto() {
        return $this->belongsTo('App\Produto', 'produtoId' );
    }

    public function pedido() {
        return $this->belongsTo('App\Pedido', 'pedidoId' );
    }
}
