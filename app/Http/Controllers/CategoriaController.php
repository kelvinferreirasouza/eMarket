<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Setor;

class CategoriaController extends Controller
{
    public function cadastrarCategoria()
    {   
        $setores = Setor::all();
        return view('categorias.cadastrar', compact('setores'));
    }

    public function salvarCategoria(Request $request)
    {
        $dados = $request->all();
        Categoria::create($dados);
 
        return redirect()->route('listarCategorias');
    }

    public function listarCategorias()
    {
        $categorias = Categoria::orderBy('produtoSetorId')->get();
        $setores = Setor::all();
        return view('categorias.listar', compact('categorias', 'setores'));
    }

    public function editarCategoria($id)
    {
        $categoria = Categoria::find($id);
        $setores = Setor::all();
        return view('categorias.editar', compact('categoria', 'setores'));
    }

    public function atualizarCategoria(Request $request, $id)
    {
        $dados = $request->all();
        $categoria = Categoria::find($id);
 
        $categoria->update($dados);

        return redirect()->route('listarCategorias');
    }

    public function visualizarCategoria($id)
    
    {
        $categoria = Categoria::find($id);
        $setores = Setor::all();
        return view('categorias.visualizar', compact('categoria', 'setores'));
    }

    public function excluirCategoria($id)
    {
        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect()->route('listarCategorias');
    }
}
