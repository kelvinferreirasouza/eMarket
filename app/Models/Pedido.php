<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Pedido extends Model {

    protected $fillable = [
        'cliente_id', 'referencia', 'codigo', 'total', 'frete', 'status', 'metodo_pagamento', 'data'
    ];
    
    protected $table = 'pedidos';

    public function produtos() {
        return $this->belongsToMany(Produto::class, 'pedidoprodutos')->withPivot('qtd', 'valor');
    }
    
    public function scopeCliente($query)
    {
        return $query->where('cliente_id', Auth::guard('clientes')->user()->id);
    }

    public function novoPedidoProdutos($carrinho, $reference, $code, $total, $status, $metodo_pagamento) {
        
        // cria um novo pedido
        $pedido = $this->create([
            'cliente_id' => Auth::guard('clientes')->user()->id,
            'referencia' => $reference,
            'codigo' => $code,
            'total' => $total,
            'status' => $status,
            'metodo_pagamento' => $metodo_pagamento,
            'data' => date('Ymd'),
        ]);

        // cria um array vazio para armazenar os produtos do pedido
        $produtosPedido = [];

        // recupera os itens que estão no carrinho
        $itemsCarrinho = $carrinho->getItems();

        // cria um laço para adicionar os itens do carrinho no array $produtosPedido
        foreach ($itemsCarrinho as $item) {
            $produtosPedido[$item['item']->id] = [
                'qtd' => $item['qtd'],
                'valor' => $item['item']->precoVenda,
            ];
        }

        //cria um registro na tabela produtosProdutos com os produtos do pedido
        $pedido->produtos()->attach($produtosPedido);
    }
    
    // retorna o status conforme o codigo recebido
    public function getStatus($status)
    {
        $codStatus = [
            1 => 'Aguardando Pagamento',
            2 => 'Em análise',
            3 => 'Pagamento Aprovado',
            4 => 'Disponível',
            5 => 'Em disputa',
            6 => 'Pagamento Devolvido',
            7 => 'Cancelado',
            8 => 'Debitado',
            9 => 'Retenção temporária',
        ];
        
        return $codStatus[$status];
    }
    
    // retorna o nome da forma de pagamento conforme o codigo recebido
    public function getFormaPagamento($metodo_pagamento)
    {
        $codMetodoPagamento = [
            1 => 'Cartão de Crédito',
            2 => 'Boleto Bancário',
            3 => 'Débito Online (TEF)',
            4 => 'Saldo PagSeguro',
            5 => 'Oi Paggo',
            7 => 'Débito em Conta',
        ];
        
        return $codMetodoPagamento[$metodo_pagamento];
    }
    
    // formata a exibicao da Data
    public function getDataAttribute($data)
    {
        return Carbon::parse($data)->format('d/m/Y');
    }
    
    public function formatValue($value)
    {
        return number_format((float)$value, 2, '.', '');
    }
    
    public function pesquisa($request) {
        $keySearch = $request->key_search;
        
        

        return $this->where('id', "{$keySearch}")
                        ->orWhere('codigo', "{$keySearch}")
                        ->orWhere('referencia', "{$keySearch}")
                        ->paginate(10);
    }

}
