<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Empresa;
use App\Frete;
use App\FormaPagamento;
use App\PedidoProduto;

class PedidoController extends Controller
{
        public function cadastrarPedido()
    {
        $clientes         = Cliente::all();
        $empresas         = Empresa::all();
        $fretes           = Frete::all();
        $formaPagamentos  = FormaPagamento::all();
        $pedidoProdutos   = PedidoProduto::all();
        return view('pedidos.cadastrar', compact('clientes', 'empresas', 'fretes', 'formaPagamentos', 'pedidoProdutos'));
    }

    public function listarPedidos()
    {
        $pedidos          = Pedido::paginate(10);
        $clientes         = Cliente::all();
        $empresas         = Empresa::all();
        $fretes           = Frete::all();
        $formaPagamentos  = FormaPagamento::all();
        $pedidoProdutos   = PedidoProduto::all();

        return view('pedidos.listar', compact('pedidos', 'clientes', 'empresas', 'fretes', 'formaPagamentos', 'pedidoProdutos'));
    }

    public function salvarPedido(Request $request)
    {
        $dados = $request->all();

        Pedido::create($dados);
 
        return redirect()->route('listarPedidos');
    }

    public function visualizarPedido($id)
    
    {
        $pedido           = Pedido::find($id);
        $clientes         = Cliente::all();
        $empresas         = Empresa::all();
        $fretes           = Frete::all();
        $formaPagamentos  = FormaPagamento::all();
        $pedidoProdutos   = PedidoProduto::all();

        return view('pedidos.visualizar', compact('pedido', 'clientes', 'empresas', 'fretes', 'formaPagamentos', 'pedidoProdutos'));
    }

    public function excluirPedido($id)
    {
        $pedido = Pedido::find($id);

        $pedido->delete();

        return redirect()->route('listarPedidos');
    }

    public function editarPedido($id)
    {
        $pedido           = Pedido::find($id);
        $clientes         = Cliente::all();
        $empresas         = Empresa::all();
        $fretes           = Frete::all();
        $formaPagamentos  = FormaPagamento::all();
        $pedidoProdutos   = PedidoProduto::all();

        return view('produtos.editar', compact('pedido', 'clientes', 'empresas', 'fretes', 'formaPagamentos', 'pedidoProdutos'));
    }

    public function atualizarPedido(Request $request, $id)
    {
        $dados = $request->all();
        $pedido = Pedido::find($id);
 
        $pedido->update($dados);

        return redirect()->route('listarPedidos');
    }
}
