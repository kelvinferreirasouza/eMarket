<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PagSeguro;
use App\Pedido;
use App\Carrinho;

class PagSeguroController extends Controller
{
    public function pagseguro(PagSeguro $pagseguro)
    {
        $code = $pagseguro->generate();
        
        $urlRedirect = config('pagseguro.url_redirect_after_request').$code;
        
        return redirect()->away($urlRedirect);
    }
    
    public function lightbox()
    {
        return view('pagseguro-lightbox');
    }
    
    public function lightboxCode(PagSeguro $pagseguro)
    {
        return $pagseguro->generate();
    }
    
    public function transparente()
    {
        return view('pagsegurotransparente');
    }
    
    public function getCode(PagSeguro $pagseguro)
    {
        return $pagseguro->getSessionId();
    }
    
    public function billet(Request $request, PagSeguro $pagseguro, Pedido $pedido)
    {
        $response = $pagseguro->paymentBillet($request->sendHash);
        
        $carrinho = new Carrinho;
        // gera um novo pedido
        $pedido->novoPedidoProdutos($carrinho, $response['reference'], $response['code'], $total = $carrinho->total(), $status = 1, $metodo_pagamento = 2);
        // limpa o carrinho
        $carrinho->carrinhoVazio();
        
        return response()->json($response, 200);
    }
    
    public function card(){
        return view('pagseguro-transparent-card');
    }
    
    public function cardTransaction(Request $request, PagSeguro $pagseguro)
    {
        return $pagseguro->paymentCredCard($request);
    }
}