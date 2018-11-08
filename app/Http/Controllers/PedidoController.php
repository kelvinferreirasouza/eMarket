<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;
use App\PedidoProduto;
use App\Pedido;
use App\Cliente;
use App\Setor;
use App\Categoria;
use App\Fornecedor;
use App\Unidade;
use PDF;
use Illuminate\Support\Facades\View;

class PedidoController extends Controller {

    private $pedido;

    public function __construct(Pedido $pedido) {
        $this->pedido = $pedido;
    }

    public function cadastrarPedido() {
        $clientes = Cliente::all();
        $empresas = Empresa::all();
        $fretes = Frete::all();
        $formaPagamentos = FormaPagamento::all();
        $pedidoProdutos = PedidoProduto::all();
        return view('pedidos.cadastrar', compact('clientes', 'empresas', 'fretes', 'formaPagamentos', 'pedidoProdutos'));
    }

    public function listarPedidos() {
        $pedidos = Pedido::orderBy('pedidos.id', 'desc')->paginate(10);
        $pedidoProdutos = PedidoProduto::all();
        $produtos = Produto::all();
        $clientes = Cliente::all();
        $setores = Setor::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
        $unidades = Unidade::all();

        return view('pedidos.listar', compact('pedidos', 'pedidoProdutos', 'produtos', 'clientes', 'setores', 'categorias', 'fornecedores', 'unidades'));
    }

    public function salvarPedido(Request $request) {
        $dados = $request->all();

        Pedido::create($dados);

        return redirect()->route('listarPedidos');
    }

    public function visualizarPedido($id) {
        $pedido = Pedido::find($id);
        $clientes = Cliente::all();
        $empresas = Empresa::all();
        $fretes = Frete::all();
        $formaPagamentos = FormaPagamento::all();
        $pedidoProdutos = PedidoProduto::all();

        return view('pedidos.visualizar', compact('pedido', 'clientes', 'empresas', 'fretes', 'formaPagamentos', 'pedidoProdutos'));
    }

    public function excluirPedido($id) {
        $pedido = Pedido::find($id);

        $pedido->delete();

        return redirect()->route('listarPedidos');
    }

    public function editarPedido($id) {
        $pedido = Pedido::find($id);
        $clientes = Cliente::all();
        $empresas = Empresa::all();
        $fretes = Frete::all();
        $formaPagamentos = FormaPagamento::all();
        $pedidoProdutos = PedidoProduto::all();

        return view('produtos.editar', compact('pedido', 'clientes', 'empresas', 'fretes', 'formaPagamentos', 'pedidoProdutos'));
    }

    public function atualizarPedido(Request $request, $id) {
        $dados = $request->all();
        $pedido = Pedido::find($id);

        // valida para que alguns campos não sejam alterados
        $dados['id'] = $pedido->id;
        $dados['cliente_id'] = $pedido->cliente_id;
        $dados['total'] = $pedido->total;
        $dados['frete'] = $pedido->frete;
        $dados['codigo'] = $pedido->codigo;
        $dados['referencia'] = $pedido->referencia;

        $pedido->update($dados);

        return redirect()->route('listarPedidos');
    }

    public function pesquisarPedido(Request $request) {

        $pedidos = $this->pedido->pesquisa($request);
        $clientes = Cliente::all();

        return view('pedidos.listar', compact('pedidos', 'clientes'));
    }
    
    public function gerarPdf(){
        
        $pedidos = Pedido::all();
        
        $clientes = Cliente::all();
        
        $pdf = \App::make('dompdf.wrapper');
        $view = View::make('relatorios.pedidos.aguardPagamento', compact('pedidos', 'clientes'))->render();
        $pdf->loadHTML($view);
        
        return $pdf->stream();
    }

}
