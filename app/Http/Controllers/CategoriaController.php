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
}
