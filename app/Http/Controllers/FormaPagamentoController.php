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
        $formaspagamentos = FormaPagamento::orderBy('nome')->get();
        return view('formaspagamentos.listar', compact('formaspagamentos'));
    }

    public function salvarFormaPag(Request $request)
    {
        $dados = $request->all();
        FormaPagamento::create($dados);
 
        return redirect()->route('listarFormasPag');
    }

}
