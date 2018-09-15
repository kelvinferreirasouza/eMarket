<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Setor;
use App\Models\Categoria;

class AutenticacaoController extends Controller {

    public function manager() {
        return view('manager');
    }

    public function login() {
        return view('autenticacao.login');
    }

    public function loginCliente() {
        $setores = Setor::all();
        $categorias = Categoria::all();
        return view('store.cliente.loginUser', compact('setores', 'categorias'));
    }

    public function logar(Request $request) {
        $dados = $request->all();

        $login = $dados['login'];
        $password = $dados['password'];

        $usuario = Usuario::where('email', $login)->first();

        if (Auth::check() || ($usuario && Hash::check($password, $usuario->password))) {
            Auth::login($usuario);
            return redirect(route('manager'));
        } else {
            return redirect(route('login'));
        }
    }

    public function logarCliente(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('clientes')->attempt($credentials))
            return redirect()->route('index');

        return redirect()
                        ->route('loginCliente')
                        ->withInput()
                        ->withError(['Dados inválidos!']);
    }

    public function logout() {
        Auth::logout();
        return redirect(route('login'));
    }

    public function logoutCliente() {
        Auth()->guard('clientes')->logout();
        return redirect(route('loginCliente'));
    }

}
