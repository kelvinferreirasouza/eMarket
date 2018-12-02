<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Produto;
use App\Pedido;
use App\PedidoProduto;
use App\Cliente;
use App\Unidade;
use App\Empresa;
use View;

class VendaController extends Controller {

    private $venda;

    public function __construct(Venda $venda) {
        $this->venda = $venda;
    }

    public function listarVendas() {

        $vendas = Venda::where('isAtivo', 1)
                ->orderBy('vendas.id', 'desc')
                ->paginate(10);
        
        $pedidos = Pedido::where('isAtivo', 1)->get();
        $pedidoProdutos = PedidoProduto::all();
        $produtos = Produto::where('isAtivo', 1)->get();
        $clientes = Cliente::where('isAtivo', 1)->get();
        $unidades = Unidade::where('isAtivo', 1)->get();

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
    
    public function concluirEntrega($id){
        
        if($id == 1){
            Venda::where('id', $id)
                ->update(['status' => 3]);
        }
        
        return redirect()->route('listarVendas');
    }
    
    public function realizarEntrega($id){
        
        $venda = Venda::find($id);
        
        if($id == 1){
            Venda::where('id', $id)
                ->update(['status' => 2]);
        }
        
        $pedido = Pedido::find($venda->pedidoId);
        $pedidoProdutos = PedidoProduto::all();
        $cliente = Cliente::find($pedido->cliente_id);
        $produtos = Produto::where('isAtivo', 1)->get();
        $unidades = Unidade::where('isAtivo', 1)->get();
        $empresa = Empresa::find(1);
        
        
        $pdf = \App::make('dompdf.wrapper');
        $view = View::make('relatorios.vendas.relatorioEntrega', compact('venda', 'pedido', 'pedidoProdutos', 'cliente', 'produtos', 'unidades', 'empresa'))->render();
        $pdf->loadHTML($view);

        return $pdf->stream();
    }

    public function excluirVenda($id)
    {
        $venda = Venda::find($id);

        $venda->isAtivo = 0;

        $venda->update();

        return redirect()->route('listarVendas');
    }   

    public function visualizarRelVendas() {
        return view('relatorios.vendas.listar');
    }
    
    public function relatorios($id) {

        $vendas = Venda::orderBy('vendas.id', 'desc')
                ->where('status', $id)
                ->where('isAtivo', 1)
                ->get();

        $status = $this->venda->getStatus($id);
        
        $clientes = Cliente::where('isAtivo', 1)->get();

        $pdf = \App::make('dompdf.wrapper');
        $view = View::make('relatorios.vendas.relatorio', compact('clientes', 'vendas', 'status'))->render();
        $pdf->loadHTML($view);

        return $pdf->stream();
    }
    
    public function vendasPeriodo(Request $request) {
        
        $dados = $request->all();

        $periodo1 = $dados['periodo1'];
        $periodo2 = $dados['periodo2'];
        $status = $dados['statusVenda'];
        $statusText = $dados['statusText'];
        
        // verifica se foi informado status no formulário, 99 e 999 são id do option de todos e selecione..
        if($status == 99 || $status == 999){
            $statusText = "Todos";
            
            $vendas = Venda::where([
                    ['data', '>=', $periodo1],
                    ['data', '<=', $periodo2],
                    ['isAtivo', '=', 1],
            ])->get();
        } else {
            $vendas = Venda::where([
                    ['data', '>=', $periodo1],
                    ['data', '<=', $periodo2],
                    ['status', '=', $status],
                    ['isAtivo', '=', 1],
            ])->get();
        }
        
        $clientes = Cliente::where('isAtivo', 1)->get();

        $pdf = \App::make('dompdf.wrapper');
        $view = View::make('relatorios.vendas.relatorioPeriodo', compact('clientes', 'vendas', 'periodo1', 'periodo2', 'status', 'statusText'))->render();
        $pdf->loadHTML($view);

        return $pdf->stream();
    }

}
