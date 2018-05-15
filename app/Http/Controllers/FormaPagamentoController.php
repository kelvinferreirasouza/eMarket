<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormaPagamento;

class FormaPagamentoController extends Controller
{
    public function cadastrarFormaPag()
    {
        return view('formaspagamentos.cadastrar');
    }

    public function listarFormasPag()
    {
        $formaspagamentos = FormaPagamento::all();
        return view('formaspagamentos.listar', compact('formaspagamentos'));
    }

    public function salvarFormaPag(Request $request)
    {
        $dados = $request->all();
        FormaPagamento::create($dados);
 
        return redirect()->route('listarFormasPag');
    }

    public function excluirFormaPag($id)
    {
        $formapagamento = FormaPagamento::find($id);

        $formapagamento->delete();

        return redirect()->route('listarFormasPag');
    }

    public function visualizarFormaPag($id)
    
    {
        $formapagamento = FormaPagamento::find($id);

        return view('formaspagamentos.visualizar', compact('formapagamento'));
    }

    public function atualizarFormaPag(Request $request, $id)
    {
        $dados = $request->all();
        $formapagamento = FormaPagamento::find($id);
 
        $formapagamento->update($dados);

        return redirect()->route('listarFormasPag');
    }

    public function editarFormaPag($id)
    {
        $formapagamento = FormaPagamento::find($id);
        
        return view('formaspagamentos.editar', compact('formapagamento'));
    }


}
