<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Produto;
use App\Setor;
use App\Categoria;
use App\Unidade;
use App\Fornecedor;

class ProdutoController extends Controller {

    private $produto;

    public function __construct(Produto $produto) {
        $this->produto = $produto;
    }

    public function cadastrarProduto() {
        $setores = Setor::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
        return view('produtos.cadastrar', compact('setores', 'unidades', 'categorias', 'fornecedores'));
    }

    public function listarProdutos() {
        $produtos = Produto::paginate(10);
        $setores = Setor::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.listar', compact('produtos', 'setores', 'unidades', 'categorias', 'fornecedores'));
    }

    public function salvarProduto(Request $request) {
        $dados = $request->all();
        
        $codBarras = $request->codBarras;

        $this->validate($request, $this->produto->rules, $this->produto->messages);

                $prod = new Produto();
                $prod->codBarras           = $request->codBarras;
                $prod->produtoNome         = $request->produtoNome;
                $prod->qtd                 = $request->qtd;
                $prod->qtdMin              = $request->qtdMin;
                $prod->precoCusto          = $request->precoCusto;
                $prod->precoVenda          = $request->precoVenda;
                $prod->margemLucro         = $request->margemLucro;
                $prod->produtoSetorId      = $request->produtoSetorId;
                $prod->produtoCategoriaId  = $request->produtoCategoriaId;
                $prod->produtoMarca        = $request->produtoMarca;
                $prod->produtoUnidadeId    = $request->produtoUnidadeId;
                $prod->produtoFornecedorId = $request->produtoFornecedorId;
                $prod->isPromocao          = $request->isPromocao;
                $prod->isAtivo             = $request->isAtivo; 
                $prod->save();
                $id = $prod->id;

        if($request->hasFile('file')) {
            $contador = 1;
            foreach($request->file as $file) {
                $file_extension = $file->getClientOriginalExtension();
                $filename = $id . "-" . $contador. "." . $file_extension;
                DB::table('produtos')
                    ->where('id', $id)
                    ->update(array('imagem'.$contador => $filename));
                $destination_path = public_path('/imgs/produtos');
                $file->move($destination_path,$filename);
                $contador = $contador + 1;
            }
        }

        return redirect()->route('listarProdutos');
    }

    public function visualizarProduto($id) {
        $produto = Produto::find($id);
        $setores = Setor::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.visualizar', compact('produto', 'setores', 'unidades', 'categorias', 'fornecedores'));
    }

    public function excluirProduto($id) {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect()->route('listarProdutos');
    }

    public function editarProduto($id) {
        $produto = Produto::find($id);
        $setores = Setor::all();
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.editar', compact('produto', 'setores', 'unidades', 'categorias', 'fornecedores'));
    }

    public function atualizarProduto(Request $request, $id) {
        $dados = $request->all();
        $produto = Produto::find($id);
        $codBarras = $request->codBarras;
        $produto->update($dados);
        $id = $produto->id;

        if($request->hasFile('file')) {
            $contador = 1;
            foreach($request->file as $file) {
                $file_extension = $file->getClientOriginalExtension();
                $filename = $id . "-" . $contador. "." . $file_extension;
                DB::table('produtos')
                    ->where('id', $id)
                    ->update(array('imagem'.$contador => $filename));
                $destination_path = public_path('/imgs/produtos');
                $file->move($destination_path,$filename);
                $contador = $contador + 1;
            }
        }

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
        $unidades = Unidade::all();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();

        return view('produtos.listar', compact('produtos', 'setores', 'unidades', 'categorias', 'fornecedores'));
    }

}
