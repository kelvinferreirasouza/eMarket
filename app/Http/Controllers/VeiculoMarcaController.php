<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VeiculoMarca;

class VeiculoMarcaController extends Controller
{
    private $fornecedor;

    public function __construct(VeiculoMarca $veiculomarca)
    {
        $this->veiculomarca = $veiculomarca;
    }
    
    public function cadastrarVeiculoMarca()
    {   
        $veiculomarcas = Veiculo::all();
        return view('veiculomarcas.cadastrar', compact('veiculomarcas'));
    }

    public function salvarVeiculoMarca(Request $request)
    {
        $dados = $request->all();
        VeiculoMarca::create($dados);
 
        return redirect()->route('listarVeiculoMarcas');
    }

    public function listarVeiculoMarcas()
    {
        $veiculomarcas = VeiculoMarca::all();
        return view('veiculomarcas.listar', compact('veiculomarcas'));
    }

    public function excluirVeiculoMarca($id)
    {
        $veiculomarcas = VeiculoMarca::find($id);

        $veiculomarcas->delete();

        return redirect()->route('listarVeiculoMarcas');
    }

    public function editarVeiculoMarca($id)
    {
        $veiculomarca = VeiculoMarca::find($id);
        return view('veiculomarcas.editar', compact('veiculomarca'));
    }

    public function atualizarVeiculoMarca(Request $request, $id)
    {
        $dados = $request->all();
        $veiculomarca = VeiculoMarca::find($id);
 
        $veiculomarca->update($dados);

        return redirect()->route('listarVeiculoMarcas');
    }

    public function visualizarVeiculoMarca($id)
    {
        $veiculomarca = VeiculoMarca::find($id);
        return view('veiculomarcas.visualizar', compact('veiculomarca'));
    }
    
    public function pesquisarVeiculoMarca(Request $request) {
        
        $veiculomarcas = $this->veiculomarca->pesquisa($request);
        
        return view('veiculomarcas.listar', compact('veiculomarcas'));
    }
}
