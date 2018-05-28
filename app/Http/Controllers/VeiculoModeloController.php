<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VeiculoModelo;
use App\VeiculoMarca;

class VeiculoModeloController extends Controller
{
    public function cadastrarVeiculoModelo()
    {   
        $veiculomodelos = VeiculoModelo::all();
        $veiculomarcas = VeiculoMarca::all();

        return view('veiculomodelos.cadastrar', compact('veiculomodelos', 'veiculomarcas'));
    }

    public function salvarVeiculoModelo(Request $request)
    {
        $dados = $request->all();
        VeiculoModelo::create($dados);
 
        return redirect()->route('listarVeiculoModelos');
    }

    public function listarVeiculoModelos()
    {
        $veiculomodelos = VeiculoModelo::orderBy('veiculoMarcaId')->get();
        $veiculomarcas = VeiculoMarca::all();
        return view('veiculomodelos.listar', compact('veiculomodelos', 'veiculomarcas'));
    }

    public function excluirVeiculoModelo($id)
    {
        $veiculomodelo = VeiculoModelo::find($id);

        $veiculomodelo->delete();

        return redirect()->route('listarVeiculoModelos');
    }

    public function editarVeiculoModelo($id)
    {
        $veiculomodelo = VeiculoModelo::find($id);
        $veiculomarca = VeiculoMarca::all();
        return view('veiculomodelos.editar', compact('veiculomodelo', 'veiculomarca'));
    }

    public function atualizarVeiculoModelo(Request $request, $id)
    {
        $dados = $request->all();
        $veiculomodelo = VeiculoModelo::find($id);
 
        $veiculomodelo->update($dados);

        return redirect()->route('listarVeiculoModelos');
    }

    public function visualizarVeiculoModelo($id)
    {
        $veiculomodelo = VeiculoModelo::find($id);
        $veiculomarcas = VeiculoMarca::all();
        return view('veiculomodelos.visualizar', compact('veiculomodelo', 'veiculomarca'));
    }
}