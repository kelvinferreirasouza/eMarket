<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Produto;
use App\Pedido;
use App\PedidoProduto;
use App\Cliente;
use App\Unidade;
use View;

class VendaController extends Controller {

    private $venda;

    public function __construct(Venda $venda) {
        $this->venda = $venda;
    }

    public function listarVendas() {

        $vendas = Venda::paginate(10);
        $pedidos = Pedido::all();
        $pedidoProdutos = PedidoProduto::all();
        $produtos = Produto::all();
        $clientes = Cliente::all();
        $unidades = Unidade::all();

        return view('vendas.listar', compact('vendas', 'pedidos', 'pedidoProdutos', 'produtos', 'clientes', 'unidades'));
    }

    public function atualizarVenda(Request $request, $id) {
        $dados = $request->all();
        $venda = Venda::find($id);

        // valida para que alguns campos não sejam alterados
        $dados['id'] = $venda->id;
        $dados['pedidoId'] = $venda->pedidoId;
        $dados['total'] = $venda->total;
        $dados['frete'] = $venda->frete;

        $venda->update($dados);

        return redirect()->route('listarVendas');
    }

    public function visualizarRelVendas() {
        return view('relatorios.vendas.listar');
    }
    
    public function relatorios($id) {

        $vendas = Venda::orderBy('vendas.id', 'desc')
                ->where('status', $id)
                ->get();

        $status = $this->venda->getStatus($id);
        
        $clientes = Cliente::all();

        $pdf = \App::make('dompdf.wrapper');
        $view = View::make('relatorios.vendas.relatorios', compact('clientes', 'vendas', 'status'))->render();
        $pdf->loadHTML($view);

        return $pdf->stream();
    }

}
