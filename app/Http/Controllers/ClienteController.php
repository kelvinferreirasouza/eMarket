<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Cliente;
use App\Setor;
use App\Categoria;
use App\Pedido;
use App\Unidade;
use App\Models\Venda;

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
        $cliente = Cliente::find($id);
        $clientes = Cliente::all();
        return view('clientes.editar', compact('cliente'));
    }

    public function atualizarCliente(Request $request, $id) {

        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('update', Auth::user());
        
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
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('delete', Auth::user());
        
        $cliente = Cliente::find($id);

        $cliente->delete();

        return redirect()->route('listarClientes');
    }

    public function visualizarCliente($id) {
        
        $this->authorize('view', Cliente::class);

        $cliente = Cliente::find($id);

        return view('clientes.visualizar', compact('cliente'));
    }

    public function salvarCliente(Request $request) {
        
        // verifica se o usuario tem permissao para realizar esta acao
        $this->authorize('create', Auth::user());
        
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

    public function detalhesPedido($id) {

        $setores = Setor::all();
        $categorias = Categoria::all();
        $unidades = Unidade::all();

        $cliente = $this->cliente->getClienteAuth();

        // consulta o pedido e verifica se ele é do usuario logado
        $pedido = Pedido::orderBy('pedidos.id')
                ->where('id', $id)
                ->where('cliente_id', $cliente->id)
                ->get()
                ->first();
        
        // verifica se existe o pedido, caso contrario retorna para a pagina anterior
        if (!$pedido) {
            return redirect()->back();
        }
            $produtos = $pedido->produtos()->get();
            
            $venda = DB::table('vendas')->where('pedidoId', 5)->get();

        return view('store.pedido.detalhesPedido', compact('pedido', 'produtos', 'venda', 'setores', 'categorias', 'unidades'));
    }

    public function cancelarPedido($id) {

        $pedido = Pedido::find($id);

        if ($pedido->status != 7 && $pedido->status != 6) {
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
