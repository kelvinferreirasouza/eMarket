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
}
