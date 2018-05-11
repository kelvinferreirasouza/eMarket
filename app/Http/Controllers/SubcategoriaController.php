<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategoria;
use App\Categoria;

class SubcategoriaController extends Controller
{
    public function cadastrarSubcategoria()
    {   
        $subcategorias = Subcategoria::all();
        $categorias = Categoria::all();
        return view('subcategorias.cadastrar', compact('subcategorias', 'categorias'));
    }

    public function salvarSubcategoria(Request $request)
    {
        $dados = $request->all();
        Subcategoria::create($dados);
 
        return redirect()->route('listarSubcategorias');
    }

    public function listarSubcategorias()
    {
        $subcategorias = Subcategoria::orderBy('produtoCategoriaId')->get();
        $categorias = Categoria::all();
        return view('subcategorias.listar', compact('subcategorias', 'categorias'));
    }

    public function excluirSubcategoria($id)
    {
        $Subcategoria = Subcategoria::find($id);

        $Subcategoria->delete();

        return redirect()->route('listarSubcategorias');
    }
}
