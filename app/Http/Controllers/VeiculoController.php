<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Veiculo;
use App\Models\VeiculoMarca;
use App\Models\VeiculoModelo;


class VeiculoController extends Controller
{
    private $veiculo;

    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }
    
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
    
    public function pesquisarVeiculo(Request $request) {
        
        $veiculos = $this->veiculo->pesquisa($request);
        $veiculomodelos = VeiculoModelo::all();
        $veiculomarcas = VeiculoMarca::all();
        
        return view('veiculos.listar', compact('veiculos', 'veiculomodelos', 'veiculomarcas'));
    }
}
