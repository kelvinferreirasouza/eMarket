<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller {
    
    private $fornecedor;

    public function __construct(Fornecedor $fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    public function cadastrarFornecedor() {
        return view('fornecedores.cadastrar');
    }

    public function salvarFornecedor(Request $request) {
        
        $dados = $request->all();
        Fornecedor::create($dados);

        return redirect()->route('listarFornecedores');
    }

    public function listarFornecedores() {
        $fornecedores = Fornecedor::where('isAtivo', 1)->paginate(10);
        return view('fornecedores.listar', compact('fornecedores'));
    }

    public function excluirFornecedor($id) {
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('delete', Auth::user());
        
        $fornecedor = Fornecedor::find($id);

        $fornecedor->isAtivo = 0;

        $fornecedor->update();

        return redirect()->route('listarFornecedores');
    }

    public function atualizarFornecedor(Request $request, $id) {
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('update', Auth::user());
        
        $dados = $request->all();
        $fornecedor = Fornecedor::find($id);

        $fornecedor->update($dados);

        return redirect()->route('listarFornecedores');
    }

    public function pesquisarFornecedor(Request $request) {
        
        $fornecedores = $this->fornecedor->pesquisa($request);
        
        return view('fornecedores.listar', compact('fornecedores'));
    }

}
