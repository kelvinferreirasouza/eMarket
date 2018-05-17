<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;
use App\Setor;
use App\Categoria;
use App\Marca;
use App\Unidade;
use App\Fornecedor;

class ProdutoController extends Controller
{

    public function cadastrarProduto()
    {
        $setores    = Setor::all();
        $marcas     = Marca::all();
        $unidades   = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
        return view('produtos.cadastrar', compact('setores', 'marcas', 'unidades', 'categorias', 'fornecedores'));
    }

    public function listarProdutos()
    {
        $produtos = Produto::all();
        $setores    = Setor::all();
        $marcas     = Marca::all();
        $unidades   = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.listar', compact('produtos', 'setores', 'marcas', 'unidades', 'categorias', 'fornecedores'));
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
        $setores    = Setor::all();
        $marcas     = Marca::all();
        $unidades   = Unidade::all();
        $categorias = Categoria::all();

        return view('produtos.visualizar', compact('produto', 'setores', 'marcas', 'unidades', 'categorias'));
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
        $setores    = Setor::all();
        $marcas     = Marca::all();
        $unidades   = Unidade::all();
        $categorias = Categoria::all();

        return view('produtos.editar', compact('produto', 'setores', 'marcas', 'unidades', 'categorias'));
    }

    public function atualizarProduto(Request $request, $id)
    {
        $dados = $request->all();
        $produto = Produto::find($id);
 
        $produto->update($dados);

        return redirect()->route('listarProdutos');
    }

    public function getCategoriasAjax(Request $request)
    {
        $categoriasAjax = DB::table("produtocategorias")
                    ->where("produtoSetorId", $request->produtoSetorId)
                    ->pluck("nome","id");
        return response()->json($categoriasAjax);
    }
}
