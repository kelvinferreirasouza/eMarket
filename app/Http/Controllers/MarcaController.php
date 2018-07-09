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
        $marcas = Marca::paginate(10);

        return view('marcas.listar', compact('marcas'));
    }

    public function editarMarca($id)
    {
        $marca = Marca::find($id);

        return view('marcas.editar', compact('marca'));
    }

    public function atualizarMarca(Request $request, $id)
    {
        $dados = $request->all();
        $marca = Marca::find($id);
 
        $marca->update($dados);

        return redirect()->route('listarMarcas');
    }

    public function visualizarMarca($id)
    {
        $marca = Marca::find($id);

        return view('marcas.visualizar', compact('marca'));
    }

    public function excluirMarca($id)
    {
        $marca = Marca::find($id);

        $marca->delete();

        return redirect()->route('listarMarcas');
    }
}
