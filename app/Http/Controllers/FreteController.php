<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Frete;

class FreteController extends Controller
{
    public function listarFretes() {
        
        $fretes = Frete::where('isAtivo', 1)->paginate(10);
        
        return view('fretes.listar', compact('fretes'));
    }
    
    public function salvarFrete(Request $request) {
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('create', Auth::user());
        
        $dados = $request->all();
        Frete::create($dados);

        return redirect()->route('listarFretes');
    }
    
    public function atualizarFrete(Request $request, $id) {
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('update', Auth::user());
        
        $dados = $request->all();
        
        $frete = Frete::find($id);

        $frete->update($dados);

        return redirect()->route('listarFretes');
    }
    
    public function excluirFrete($id) {
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('delete', Auth::user());
        
        $frete = Frete::find($id);

        $frete->isAtivo = 0;

        $frete->update();

        return redirect()->route('listarFretes');
    }
}
