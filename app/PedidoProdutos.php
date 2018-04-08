<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProdutos extends Model
{
    protected $fillable = array('pedidoId', 'produtoId', 'qtd', 'valor', 'valorDesconto', 
                                'valorAcrescimo', 'valorTotal', 'dataCadastro','horaCadastro', 'isAtivo');

    protected $table = 'produtopedidos';
}
