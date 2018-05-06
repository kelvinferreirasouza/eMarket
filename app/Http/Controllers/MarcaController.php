<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{
    public function cadastrarMarca()
    {
        return view('marcas.cadastrar');
    }

    public function salvarMarca(Request $request)
    {
        $dados = $request->all();
        Marca::create($dados);
 
        return redirect()->route('listarMarcas');
    }

    public function listarMarcas()
    {
        $marcas = Marca::all();
        return view('marcas.listar', compact('marcas'));
    }
}
