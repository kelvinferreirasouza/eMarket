<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\PagSeguro;
use App\Pedido;
use App\Carrinho;
use App\Frete;

class PagSeguroController extends Controller {

    public function pagseguro(PagSeguro $pagseguro) {
        $code = $pagseguro->generate();

        $urlRedirect = config('pagseguro.url_redirect_after_request') . $code;

        return redirect()->away($urlRedirect);
    }

    public function lightbox() {
        return view('pagseguro-lightbox');
    }

    public function lightboxCode(PagSeguro $pagseguro) {
        return $pagseguro->generate();
    }

    public function transparente() {
        return view('pagsegurotransparente');
    }

    public function getCode(PagSeguro $pagseguro) {
        return $pagseguro->getSessionId();
    }

    public function getCodeSandBox(PagSeguro $pagseguro) {
        return $pagseguro->getSessionIdCard();
    }

    public function billet(Request $request, PagSeguro $pagseguro, Pedido $pedido) {
        $idPedido = DB::table('pedidos')
                ->where('cliente_id', Auth::guard('clientes')->user()->id)
                ->orderBy('id', 'desc')
                ->pluck('id')
                ->first();

        $fretes = Frete::all();

        foreach ($fretes as $frete) {
            if ($frete->estado == Auth::guard('clientes')->user()->estado) {
                if ($frete->municipio == Auth::guard('clientes')->user()->municipio) {
                    $valor_frete = $frete->valor;
                }
            }
        }

        $response = $pagseguro->paymentBillet($request->sendHash, $idPedido, $valor_frete);
        
        $carrinho = new Carrinho;
        
        $totalPedido = $carrinho->total() + $valor_frete;
        
        // gera um novo pedido
        $pedido->novoPedidoProdutos($carrinho, $response['reference'], $response['code'], $subtotal = $carrinho->total(), $total = $totalPedido, $frete = $valor_frete, $status = 1, $metodo_pagamento = 2);

        // limpa o carrinho
        $carrinho->carrinhoVazio();

        return response()->json($response, 200);
    }

    public function cardTransaction(Request $request, PagSeguro $pagseguro, Pedido $pedido) {
        $idPedido = DB::table('pedidos')
                ->where('cliente_id', Auth::guard('clientes')->user()->id)
                ->orderBy('id', 'desc')
                ->pluck('id')
                ->first();

        $fretes = Frete::all();

        foreach ($fretes as $frete) {
            if ($frete->estado == Auth::guard('clientes')->user()->estado) {
                if ($frete->municipio == Auth::guard('clientes')->user()->municipio) {
                    $valor_frete = $frete->valor;
                }
            }
        }

        $carrinho = new Carrinho;
        
        $totalPedido = $carrinho->total() + $valor_frete;

        $response = $pagseguro->paymentCredCard($request->sendHash, $request->cardToken, $carrinho->total(), $idPedido, $valor_frete);

        // gera um novo pedido
        $pedido->novoPedidoProdutos($carrinho, $response['reference'], $response['code'], $subtotal = $carrinho->total(), $total = $totalPedido, $frete = $valor_frete, $status = 1, $metodo_pagamento = 1);
        // limpa o carrinho
        $carrinho->carrinhoVazio();

        return response()->json($response, 200);
    }

    public function card() {
        return view('pagseguro-transparent-card');
    }

}
