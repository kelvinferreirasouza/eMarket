<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Setor;

class ProdutoController extends Controller
{

    public function cadastrarProduto()
    {
        $setores = Setor::all();
        return view('produtos.cadastrar', compact('setores'));
    }

    public function listarProdutos()
    {
        $produtos = Produto::all();

        return view('produtos.listar', compact('produtos'));
    }

    public function salvarProduto(Request $request)
    {
        $dados = $request->all();
        Produto::create($dados);
 
        return redirect()->route('listarProdutos');
    }

    public function visualizarProduto($id)
    
    {
        $produto = Produto::find($id);

        return view('produtos.visualizar', compact('produto'));
    }

    public function excluirProduto($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect()->route('listarProdutos');
    }

    public function editarProduto($id)
    {
        $produto = Produto::find($id);
        $setores = Setor::all();
        return view('produtos.editar', compact('produto', 'setores'));
    }

    public function atualizarProduto(Request $request, $id)
    {
        $dados = $request->all();
        $produto = Produto::find($id);
 
        $produto->update($dados);

        return redirect()->route('listarProdutos');
    }
}
