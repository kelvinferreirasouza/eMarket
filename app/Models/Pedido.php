<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'clienteId', 'empresaId', 'totalProdutos', 'valorFrete', 'valorDesconto', 'valorAcrescimo', 'totalPedido', 'freteId', 'formaPagamentoId', 'isCancelado', 'pagConfirmado', 'isAtivo', 'pedidoProdutoId',
    ];

    protected $table = 'pedidos';

    public function cliente() {
        return $this->belongsTo('App\Cliente', 'clienteId' );
    }

    public function empresa() {
        return $this->belongsTo('App\Empresa', 'empresaId' );
    }

    public function frete() {
        return $this->belongsTo('App\Frete', 'freteId' );
    }

    public function formapagamento() {
        return $this->belongsTo('App\FormaPagamento', 'formaPagamentoId' );
    }

    public function pedidoproduto() {
        return $this->belongsTo('App\PedidoProduto', 'pedidoProdutoId' );
    }
}
