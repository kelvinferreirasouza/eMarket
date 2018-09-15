<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;

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
        $unidades = Unidade::paginate(10);
        return view('unidades.listar', compact('unidades'));
    }

    public function salvarUnidade(Request $request)
    {
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
        $unidade = Unidade::find($id);

        $unidade->delete();

        return redirect()->route('listarUnidades');
    }
    
    public function pesquisarUnidade(Request $request) {
        
        $unidades = $this->unidade->pesquisa($request);
        
        return view('unidades.listar', compact('unidades'));
    }
}
