<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;

class UnidadeController extends Controller
{
    public function cadastrarUnidade()
    {
        return view('unidades.cadastrar');
    }

    public function listarUnidades()
    {
        $unidades = Unidade::all();
        return view('unidades.listar', compact('unidades'));
    }

    public function salvarUnidade(Request $request)
    {
        $dados = $request->all();
        Unidade::create($dados);
 
        return redirect()->route('listarUnidades');
    }
}
