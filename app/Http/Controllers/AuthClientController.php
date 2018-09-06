<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Cliente;
use App\Setor;
use App\Categoria;

class AuthClientController extends Controller
{
    public function meusPedidos()
    {
        return view('meusPedidos');
    }
 
    public function loginUser()
    {
        $setores = Setor::all();
        $categorias = Categoria::all();
        return view('store.cliente.loginUser', compact('produtos','setores', 'categorias'));
    }
 
    public function logarUser(Request $request)
    {
        $dados = $request->all();
 
        $login = $dados['email'];
        $senha = $dados['senha'];
 
        $cliente = Cliente::where('email', $login)->first();
 
        if(Auth::check() || ($cliente && Hash::check($senha, $cliente->senha))){
            Auth::login($cliente);
            return redirect(route('index'));
            } else {
            return redirect(route('loginUser'));
        }
    }
 
    public function logout()
    {
        Auth::logout();
        return redirect(route('loginUser'));
    }
}
