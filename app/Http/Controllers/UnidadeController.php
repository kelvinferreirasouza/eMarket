<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use Auth;

class UnidadeController extends Controller
{
    private $unidade;

    public function __construct(Unidade $unidade)
    {
        $this->unidade = $unidade;
    }
    
    public function cadastrarUnidade()
    {
        return view('unidades.cadastrar');
    }

    public function listarUnidades()
    {
        $unidades = Unidade::where('isAtivo', 1)->paginate(10);
        return view('unidades.listar', compact('unidades'));
    }

    public function salvarUnidade(Request $request)
    {
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('create', Auth::user());
        
        $dados = $request->all();
        Unidade::create($dados);
 
        return redirect()->route('listarUnidades');
    }

    public function editarUnidade($id)
    {
        $unidade = Unidade::find($id);
        return view('unidades.editar', compact('unidade'));
    }

    public function atualizarUnidade(Request $request, $id)
    {
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('update', Auth::user());
        
        $dados = $request->all();
        $unidade = Unidade::find($id);
 
        $unidade->update($dados);

        return redirect()->route('listarUnidades');
    }

    public function visualizarUnidade($id)
    
    {
        $unidade = Unidade::find($id);

        return view('unidades.visualizar', compact('unidade'));
    }

    public function excluirUnidade($id)
    {
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('delete', Auth::user());
        
        $unidade = Unidade::find($id);

        $unidade->isAtivo = 0;

        $unidade->update();

        return redirect()->route('listarUnidades');
    }
    
    public function pesquisarUnidade(Request $request) {
        
        $unidades = $this->unidade->pesquisa($request);
        
        return view('unidades.listar', compact('unidades'));
    }
}
