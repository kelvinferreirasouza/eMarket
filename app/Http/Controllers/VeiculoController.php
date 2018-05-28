<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Veiculo;
use App\VeiculoMarca;
use App\VeiculoModelo;


class VeiculoController extends Controller
{
    public function cadastrarVeiculo()
    {   
        $veiculos = Veiculo::all();
        $veiculomodelos = VeiculoModelo::all();
        $veiculomarcas = VeiculoMarca::all();
        return view('veiculos.cadastrar', compact('veiculos', 'veiculomodelos', 'veiculomarcas'));
    }

    public function salvarVeiculo(Request $request)
    {
        $dados = $request->all();
        Veiculo::create($dados);
 
        return redirect()->route('listarVeiculos');
    }

    public function listarVeiculos()
    {
        $veiculos = Veiculo::all();
        $veiculomodelos = VeiculoModelo::all();
        $veiculomarcas = VeiculoMarca::all();
        return view('veiculos.listar', compact('veiculos', 'veiculomodelos', 'veiculomarcas'));
    }

    public function excluirVeiculo($id)
    {
        $veiculo = Veiculo::find($id);

        $veiculo->delete();

        return redirect()->route('listarVeiculos');
    }

    public function editarVeiculo($id)
    {
        $veiculo = Veiculo::find($id);
        $veiculomodelos = VeiculoModelo::all();
        $veiculomarcas = VeiculoMarca::all();
        return view('veiculos.editar', compact('veiculos', 'veiculomodelos', 'veiculomarcas'));
    }

    public function atualizarVeiculo(Request $request, $id)
    {
        $dados = $request->all();
        $veiculo = Veiculo::find($id);
 
        $veiculo->update($dados);

        return redirect()->route('listarVeiculos');
    }

    public function visualizarVeiculo($id)
    {
        $veiculo = Veiculo::find($id);
        $veiculomodelos = VeiculoModelo::all();
        $veiculomarcas = VeiculoMarca::all();
        return view('veiculos.visualizar', compact('veiculos', 'veiculomodelos', 'veiculomarcas'));
    }

    public function getModelosAjax(Request $request)
    {
        $modelosAjax = DB::table("veiculomodelos")
                    ->where("veiculoMarcaId", $request->veiculoMarcaId)
                    ->pluck("modelo","id");
        return response()->json($modelosAjax);
    }
}
