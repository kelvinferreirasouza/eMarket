<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PedidoProduto;

class Venda extends Model {

    protected $fillable = [
        'pedidoId', 'total', 'frete', 'data', 'status',
    ];
    
    protected $table = 'vendas';

    // retorna o status conforme o codigo recebido
    public function getStatus($status) {
        $codStatus = [
            1 => 'Realizada',
            2 => 'Em Entrega',
            3 => 'Concluída',
            4 => 'Cancelada',
        ];

        return $codStatus[$status];
    }

    public function getClienteVenda($pedidoId) {
        $pedido = DB::table('pedidos')->where('id', $pedidoId)->first();

        $cliente = DB::table('clientes')->where('id', $pedido->cliente_id)->first();

        return $cliente->nome;
    }
    
    public function getClienteEndereco($pedidoId){
        
        $pedido = DB::table('pedidos')->where('id', $pedidoId)->first();
        
        $cliente = DB::table('clientes')->where('id', $pedido->cliente_id)->first();
        
        return [
            'cep' => $cliente->cep,
            'logradouro' => $cliente->logradouro,
            'numero' => $cliente->numero,
            'complemento' => $cliente->complemento,
            'bairro' => $cliente->bairro,
            'estado' => $cliente->estado,
            'municipio' => $cliente->municipio
        ];
        
    }

    // formata a exibicao da Data
    public function getDataAttribute($data)
    {
        return Carbon::parse($data)->format('d/m/Y');
    }
    
    // retorna o nome da forma de pagamento conforme o codigo recebido
    public function getFormaPagamento($pedidoId)
    {
        
        $pedido = DB::table('pedidos')->where('id', $pedidoId)->first();
        
        $codMetodoPagamento = [
            1 => 'Cartão de Crédito',
            2 => 'Boleto Bancário',
            3 => 'Débito Online (TEF)',
            4 => 'Saldo PagSeguro',
            5 => 'Oi Paggo',
            7 => 'Débito em Conta',
        ];
        
        return $codMetodoPagamento[$pedido->metodo_pagamento];
    }
    
    public function getCodeTransaction($pedidoId){
        $pedido = DB::table('pedidos')->where('id', $pedidoId)->first();
        
        return $pedido->codigo;
    }
    
    public function getCodeReference($pedidoId){
        $pedido = DB::table('pedidos')->where('id', $pedidoId)->first();
        
        return $pedido->referencia;
    }
}
