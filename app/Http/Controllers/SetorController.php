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

    public function excluirSetor($id)
    {
        $setor = Setor::find($id);

        $setor->delete();

        return redirect()->route('listarSetores');
    }

    public function editarSetor($id)
    {
        $setor = Setor::find($id);
        return view('setores.editar', compact('setor'));
    }

    public function atualizarSetor(Request $request, $id)
    {
        $dados = $request->all();
        $setor = Setor::find($id);
 
        $setor->update($dados);

        return redirect()->route('listarSetores');
    }

    
}
