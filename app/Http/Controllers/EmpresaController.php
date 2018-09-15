<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
    public function cadastrarEmpresa()
    {
        return view('empresas.cadastrar');
    }

    public function salvarEmpresa(Request $request)
    {
        $dados = $request->all();
        Empresa::create($dados);
 
        return redirect()->route('listarEmpresas');
    }

    public function listarEmpresas()
    {
        $empresas = Empresa::all();
        return view('empresas.listar', compact('empresas'));
    }

    public function excluirEmpresa($id)
    {
        $empresa = Empresa::find($id);

        $empresa->delete();

        return redirect()->route('listarEmpresas');
    }

    public function atualizarEmpresa(Request $request, $id)
    {
        $dados = $request->all();
        $empresa = Empresa::find($id);
 
        $empresa->update($dados);

        return redirect()->route('listarEmpresas');
    }
}
