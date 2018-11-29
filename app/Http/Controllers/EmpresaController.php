<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use Auth;

class EmpresaController extends Controller
{
    public function cadastrarEmpresa()
    {
        return view('empresas.cadastrar');
    }

    public function salvarEmpresa(Request $request)
    {
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('create', Auth::user());
        
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
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('delete', Auth::user());
        
        $empresa = Empresa::find($id);

        $empresa->delete();

        return redirect()->route('listarEmpresas');
    }

    public function atualizarEmpresa(Request $request, $id)
    {
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('update', Auth::user());
        
        $dados = $request->all();
        $empresa = Empresa::find($id);
 
        $empresa->update($dados);

        return redirect()->route('listarEmpresas');
    }
}
