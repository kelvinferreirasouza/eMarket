<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;	

class FornecedorController extends Controller
{
    public function cadastrarFornecedor()
    {
        return view('fornecedores.cadastrar');
    }

    public function salvarFornecedor(Request $request)
    {
        $dados = $request->all();
        Fornecedor::create($dados);
 
        return redirect()->route('listarFornecedores');
    }

    public function listarFornecedores()
    {
        $fornecedores = Fornecedor::paginate(10);
        return view('fornecedores.listar', compact('fornecedores'));
    }

    public function excluirFornecedor($id)
    {
        $fornecedor = Fornecedor::find($id);

        $fornecedor->delete();

        return redirect()->route('listarFornecedores');
    }

    public function atualizarFornecedor(Request $request, $id)
    {
        $dados = $request->all();
        $fornecedor = Fornecedor::find($id);
 
        $fornecedor->update($dados);

        return redirect()->route('listarFornecedores');
    }
}
