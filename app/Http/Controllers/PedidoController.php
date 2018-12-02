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
use App\Models\Venda;
use PDF;
use View;
use Auth;

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
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('delete', Auth::user());
        
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

        // verifica se o status alterado é aprovado, se sim, gera uma nova venda
        if($dados['status'] == 3){
            Venda::create([
                'pedidoId' => $pedido->id,
                'total'    => $pedido->total,
                'frete'    => $pedido->frete,
                'data'     => date('Y-m-d'),
                'status'   => 1,
            ]);
        }

        $pedido->update($dados);

        return redirect()->route('listarPedidos');
    }

    public function pesquisarPedido(Request $request) {

        $pedidos = $this->pedido->pesquisa($request);
        $clientes = Cliente::all();

        return view('pedidos.listar', compact('pedidos', 'clientes'));
    }

    // Functions de Relatórios

    public function visualizarRelPedidos() {
        return view('relatorios.pedidos.listar');
    }

    public function relatorios($id) {

        $pedidos = Pedido::orderBy('pedidos.id', 'desc')
                ->where('status', $id)
                ->get();

        $status = $this->pedido->getStatus($id);
        
        $clientes = Cliente::all();

        $pdf = \App::make('dompdf.wrapper');
        $view = View::make('relatorios.pedidos.relatorio', compact('pedidos', 'clientes', 'status'))->render();
        $pdf->loadHTML($view);

        return $pdf->stream();
    }

    public function pedidosPeriodo(Request $request) {
        
        $dados = $request->all();

        $periodo1 = $dados['periodo1'];
        $periodo2 = $dados['periodo2'];
        $status = $dados['statusPedido'];
        $statusText = $dados['statusText'];
        
        
        // verifica se foi informado status no formulário, 99 e 999 são id do option de todos e selecione..
        if($status == 99 || $status == 999){
            $statusText = "Todos";
            
            $pedidos = Pedido::where([
                    ['data', '>=', $periodo1],
                    ['data', '<=', $periodo2],
            ])->get();
        } else {
            $pedidos = Pedido::where([
                    ['data', '>=', $periodo1],
                    ['data', '<=', $periodo2],
                    ['status', '=', $status],
            ])->get();
        }
        
        $clientes = Cliente::all();

        $pdf = \App::make('dompdf.wrapper');
        $view = View::make('relatorios.pedidos.relatorioPeriodo', compact('clientes', 'pedidos', 'periodo1', 'periodo2', 'status', 'statusText'))->render();
        $pdf->loadHTML($view);

        return $pdf->stream();
    }

}
