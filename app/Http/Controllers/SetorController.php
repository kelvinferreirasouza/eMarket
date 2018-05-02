<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setor;

class SetorController extends Controller
{
    public function cadastrarSetor()
    {
        return view('setores.cadastrar');
    }

    public function listarSetores()
    {
        $setores = Setor::all();
        return view('setores.listar', compact('setores'));
    }

    public function salvarSetor(Request $request)
    {
        $dados = $request->all();
        Setor::create($dados);
 
        return redirect()->route('listarSetores');
    }

    
}
