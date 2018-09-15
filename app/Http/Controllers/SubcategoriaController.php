<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategoria;
use App\Models\Categoria;

class SubcategoriaController extends Controller
{
    private $subcategoria;

    public function __construct(Subcategoria $subcategoria)
    {
        $this->subcategoria = $subcategoria;
    }
    
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
        $subcategorias = Subcategoria::orderBy('produtoCategoriaId')->paginate(10);
        $categorias = Categoria::all();
        return view('subcategorias.listar', compact('subcategorias', 'categorias'));
    }

    public function excluirSubcategoria($id)
    {
        $Subcategoria = Subcategoria::find($id);

        $Subcategoria->delete();

        return redirect()->route('listarSubcategorias');
    }

    public function editarSubcategoria($id)
    {
        $subcategoria = Subcategoria::find($id);
        $categorias = Categoria::all();
        return view('subcategorias.editar', compact('subcategoria', 'categorias'));
    }

    public function atualizarSubcategoria(Request $request, $id)
    {
        $dados = $request->all();
        $subcategoria = Subcategoria::find($id);
 
        $subcategoria->update($dados);

        return redirect()->route('listarSubcategorias');
    }

    public function visualizarSubcategoria($id)
    
    {
        $subcategoria = Subcategoria::find($id);
        $categorias = Categoria::all();
        return view('subcategorias.visualizar', compact('subcategoria', 'categorias'));
    }
    
    public function pesquisarSubcategoria(Request $request) {
        
        $subcategorias = $this->subcategoria->pesquisa($request);
        $categorias = Categoria::all();
        
        return view('fornecedores.listar', compact('subcategorias', 'categorias'));
    }
}
