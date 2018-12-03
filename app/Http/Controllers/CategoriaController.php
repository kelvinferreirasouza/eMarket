<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Setor;
use Auth;

class CategoriaController extends Controller
{
    private $categoria;

    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }
    
    public function cadastrarCategoria()
    {   
        $setores = Setor::where('isAtivo', 1)->get();
        return view('categorias.cadastrar', compact('setores'));
    }

    public function salvarCategoria(Request $request)
    {
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('create', Auth::user());
        
        $dados = $request->all();
        Categoria::create($dados);
 
        return redirect()->route('listarCategorias');
    }

    public function listarCategorias()
    {
        $categorias = Categoria::where('isAtivo', 1)
                ->orderBy('produtoSetorId')
                ->paginate(10);
        
        $setores = Setor::where('isAtivo', 1)->get();
        return view('categorias.listar', compact('categorias', 'setores'));
    }

    public function editarCategoria($id)
    {
        $categoria = Categoria::find($id);
        $setores = Setor::where('isAtivo', 1);
        return view('categorias.editar', compact('categoria', 'setores'));
    }

    public function atualizarCategoria(Request $request, $id)
    {
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('update', Auth::user());
        
        $dados = $request->all();
        $categoria = Categoria::find($id);
 
        $categoria->update($dados);

        return redirect()->route('listarCategorias');
    }

    public function visualizarCategoria($id)
    
    {
        $categoria = Categoria::find($id);
        $setores = Setor::where('isAtivo', 1)->get();
        return view('categorias.visualizar', compact('categoria', 'setores'));
    }

    public function excluirCategoria($id)
    {
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('delete', Auth::user());
        
        $categoria = Categoria::find($id);

        $categoria->isAtivo = 0;

        $categoria->update();

        return redirect()->route('listarCategorias');
    }
    
    public function pesquisarCategoria(Request $request) {
        
        $categorias = $this->categoria->pesquisa($request);
        $setores = Setor::where('isAtivo', 1)->get();
        
        return view('categorias.listar', compact('categorias', 'setores'));
    }
}
