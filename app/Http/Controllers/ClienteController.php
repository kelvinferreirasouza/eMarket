<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Cliente;
use App\Setor;
use App\Categoria;
use App\Pedido;
use App\Unidade;

class ClienteController extends Controller {

    private $cliente;
    
    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function registerUser() {
        $setores = Setor::all();
        $categorias = Categoria::all();
        return view('store.cliente.loginUser', compact('setores', 'categorias'));
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

        if (!$dados['password']) {
            $senha_antiga = $cliente->password;
            $dados['password'] = $senha_antiga;
            $cliente->update($dados);
        } else {
            $senha_nova = Hash::make($dados['password']);
            $dados['password'] = $senha_nova;
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
        $dados['password'] = bcrypt($dados['password']);

        Cliente::create($dados);

        return redirect()->route('listarClientes');
    }

    public function cadastroCliente(Request $request) {
        $dados = $request->all();
        $dados['password'] = bcrypt($dados['password']);

        Cliente::create($dados);

        return redirect()->route('loginCliente');
    }

    public function cadastrarCliente() {
        return view('clientes.cadastrar');
    }

    public function minhaConta() {

        $setores = Setor::all();
        $categorias = Categoria::all();

        return view('store.cliente.minhaConta', compact('setores', 'categorias'));
    }

    public function meusPedidos() {

        $setores = Setor::all();
        $categorias = Categoria::all();
        
        $pedidos = Pedido::orderBy('pedidos.id', 'desc')
                ->where('cliente_id', $this->cliente->getClienteAuth()->id)
                ->paginate(10);
        
        return view('store.cliente.meusPedidos', compact('setores', 'categorias', 'pedidos'));
    }
    
    public function detalhesPedido($id){
        
        $setores = Setor::all();
        $categorias = Categoria::all();
        $unidades = Unidade::all();
        
        $cliente = $this->cliente->getClienteAuth();
        
        
        $pedido = Pedido::orderBy('pedidos.id')
                    ->where('id', $id)
                    ->where('cliente_id', $cliente->id)
                    ->get()
                    ->first();
        
        $produtos = $pedido->produtos()->get();
        
        if(!$pedido)
            return redirect()->back();
        
        return view('store.pedido.detalhesPedido', compact('pedido', 'produtos', 'setores', 'categorias', 'unidades'));
    }
    
    public function cancelarPedido($id){
        
        $pedido = Pedido::find($id);
        
        if($pedido->status != 7 &&  $pedido->status != 6){
            $pedido->status = 7;
            $pedido->save();
        }

        return redirect()->back();
    }

    public function pesquisarCliente(Request $request) {

        $clientes = $this->cliente->pesquisa($request);

        return view('clientes.listar', compact('clientes'));
    }

    public function atualizarPerfilCliente(Request $request, Cliente $cliente) {

        $dados = $request->all();

        // verifica se existe esses dados vindo do formulário, se sim, apaga!
        if (isset($dados['cpf']))
            unset($dados['cpf']);

        if (!$dados['password']) {
            $senha_antiga = $this->cliente->getClienteAuth()->password;
            $dados['password'] = $senha_antiga;
        } else {
            $senha_nova = Hash::make($dados['password']);
            $dados['password'] = $senha_nova;
        }

        $update = $this->cliente->getClienteAuth()->profileUpdate($dados);

        return redirect()->route('minhaConta')->with('message', 'Perfil Atualizado com Sucesso!!');
    }

}
