<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frete;

class FreteController extends Controller
{
    public function listarFretes() {
        
        $fretes = Frete::paginate(10);
        
        return view('fretes.listar', compact('fretes'));
    }
    
    public function salvarFrete(Request $request) {
        
        $dados = $request->all();
        Frete::create($dados);

        return redirect()->route('listarFretes');
    }
    
    public function atualizarFrete(Request $request, $id) {
        
        $dados = $request->all();
        
        $frete = Frete::find($id);

        $frete->update($dados);

        return redirect()->route('listarFretes');
    }
    
    public function excluirFrete($id) {
        
        $frete = Frete::find($id);

        $frete->delete();

        return redirect()->route('listarFretes');
    }
    
    
}
