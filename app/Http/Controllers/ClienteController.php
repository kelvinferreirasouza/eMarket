<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Cliente;

class ClienteController extends Controller {

    private $cliente;

    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function listarClientes() {
        $clientes = Cliente::paginate(10);
        return view('clientes.listar', compact('clientes'));
    }

    public function editarCliente($id) {
        $this->authorize('update', Cliente::class);

        $cliente = Cliente::find($id);
        $clientes = Cliente::all();
        return view('clientes.editar', compact('cliente'));
    }

    public function atualizarCliente(Request $request, $id) {

        $dados = $request->all();
        $cliente = Cliente::find($id);

        if (!$dados['senha']) {
            $senha_antiga = $cliente->senha;
            $dados['senha'] = $senha_antiga;
            $cliente->update($dados);
        } else {
            $senha_nova = Hash::make($dados['senha']);
            $dados['senha'] = $senha_nova;
            $cliente->update($dados);
        }

        return redirect()->route('listarClientes');
    }

    public function excluirCliente($id) {
        $cliente = Cliente::find($id);

        $cliente->delete();

        return redirect()->route('listarClientes');
    }

    public function visualizarCliente($id) {
        $this->authorize('update', Cliente::class);

        $cliente = Cliente::find($id);

        return view('clientes.visualizar', compact('cliente'));
    }

    public function salvarCliente(Request $request) {
        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);

        Cliente::create($dados);

        return redirect()->route('listarClientes');
    }

    public function cadastrarCliente() {
        return view('clientes.cadastrar');
    }
    
    public function pesquisarCliente(Request $request) {
        
        $clientes = $this->cliente->pesquisa($request);
        
        return view('clientes.listar', compact('clientes'));
    }

}
