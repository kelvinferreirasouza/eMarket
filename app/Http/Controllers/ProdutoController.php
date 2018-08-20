<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Produto;
use App\Setor;
use App\Categoria;
use App\Marca;
use App\Unidade;
use App\Fornecedor;

class ProdutoController extends Controller {

    private $produto;

    public function __construct(Produto $produto) {
        $this->produto = $produto;
    }

    public function cadastrarProduto() {
        $setores = Setor::all();
        $marcas = Marca::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
        return view('produtos.cadastrar', compact('setores', 'marcas', 'unidades', 'categorias', 'fornecedores'));
    }

    public function listarProdutos() {
        $produtos = Produto::paginate(10);
        $setores = Setor::all();
        $marcas = Marca::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.listar', compact('produtos', 'setores', 'marcas', 'unidades', 'categorias', 'fornecedores'));
    }

    public function salvarProduto(Request $request) {
        $dados = $request->all();
        
        $codBarras = $request->codBarras;

        $this->validate($request, $this->produto->rules, $this->produto->messages);

        $produto = new produto;
        
        $produto->title = $codBarras;
        
        if (Input::hasFile('image')) {
            
            $produto = Input::file('image');
            $extensao = $produto->getClientOriginalExtension();
            $produto->move(public_path() . '/imgs/produtos', $codBarras . '.' . $extensao);
            $produto->name = $codBarras;
        }

        Produto::create($dados);

        return redirect()->route('listarProdutos');
    }

    public function visualizarProduto($id) {
        $produto = Produto::find($id);
        $setores = Setor::all();
        $marcas = Marca::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.visualizar', compact('produto', 'setores', 'marcas', 'unidades', 'categorias', 'fornecedores'));
    }

    public function excluirProduto($id) {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect()->route('listarProdutos');
    }

    public function editarProduto($id) {
        $produto = Produto::find($id);
        $setores = Setor::all();
        $marcas = Marca::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.editar', compact('produto', 'setores', 'marcas', 'unidades', 'categorias', 'fornecedores'));
    }

    public function atualizarProduto(Request $request, $id) {
        $dados = $request->all();
        $produto = Produto::find($id);

        $produto->update($dados);

        return redirect()->route('listarProdutos');
    }

    public function getCategoriasAjax(Request $request) {
        $categoriasAjax = DB::table("produtocategorias")
                ->where("produtoSetorId", $request->produtoSetorId)
                ->pluck("nome", "id");
        return response()->json($categoriasAjax);
    }

    public function pesquisarProduto(Request $request) {

        $produtos = $this->produto->pesquisa($request);
        $setores = Setor::all();
        $marcas = Marca::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.listar', compact('produtos', 'setores', 'marcas', 'unidades', 'categorias', 'fornecedores'));
    }

}
