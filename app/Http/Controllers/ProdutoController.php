<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{

    public function cadastrarProduto()
    {
        return view('produtos.cadastrar');
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
        $this->authorize('update', Usuario::class);

        $usuario = Usuario::find($id);

        return view('usuarios.visualizar', compact('usuario'));
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
        return view('produtos.editar', compact('produto'));
    }

    public function atualizarProduto(Request $request, $id)
    {
        $dados = $request->all();
        $produto = Produto::find($id);
 
        $produto->update($dados);

        return redirect()->route('listarProdutos');
    }
}
