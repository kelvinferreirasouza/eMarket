<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PedidoProduto;
use App\Produto;
use App\Pedido;
use App\Cliente;
use App\Setor;
use App\Categoria;
use App\Fornecedor;
use App\Unidade;

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
        $pedidos = Pedido::orderBy('pedidos.id', 'desc')->paginate(10);
        $produtos         = Produto::all();
        $clientes         = Cliente::all();
        $setores          = Setor::all();
        $categorias       = Categoria::all();
        $fornecedores     = Fornecedor::all();
        $unidades         = Unidade::all();

        return view('pedidos.listar', compact('pedidos', 'produtos', 'clientes', 'setores', 'categorias', 'fornecedores', 'unidades'));
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
