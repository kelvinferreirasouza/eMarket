<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function cadastrarCargo()
    {
        return view('cargos.cadastrar');
    }

    public function listarCargos()
    {
        $cargos = Cargo::all();
        return view('cargos.listar', compact('cargos'));
    }

    public function salvarCargo(Request $request)
    {
        $dados = $request->all();
        Cargo::create($dados);
 
        return redirect()->route('listarCargos');
    }

    public function editarCargo($id)
    {
        $cargo = Cargo::find($id);
        return view('cargos.editar', compact('cargo'));
    }

    public function atualizarCargo(Request $request, $id)
    {
        $dados = $request->all();
        $cargo = Cargo::find($id);
 
        $cargo->update($dados);

        return redirect()->route('listarCargos');
    }

    public function visualizarCargo($id)
    
    {
        $cargo = Cargo::find($id);
        return view('cargos.visualizar', compact('cargo'));
    }

    public function excluirCargo($id)
    {
        $cargo = Cargo::find($id);

        $cargo->delete();

        return redirect()->route('listarCargos');
    }
}
