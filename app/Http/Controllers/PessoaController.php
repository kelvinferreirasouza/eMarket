<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function register()
    {
        return view('register');
    }
 
    public function salvar(Request $request)
    {
        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        Usuario::create($dados);
 
        return redirect()->route('home');
    }

    public function login()
    {
        return view('login');
    }
}
