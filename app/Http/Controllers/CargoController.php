<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;

class CargoController extends Controller
{
    public function cadastrarCargo()
    {
        return view('cargos.cadastrar');
    }

    public function listarCargos()
    {
        $cargos = Cargo::orderBy('descricao')->get();
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
}
