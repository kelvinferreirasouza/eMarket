<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoas;

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

    /* Método para Efetuar Login */

    public function efetuarLogin(Request $request) {


        $validator = validator($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }

        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];

        if (auth()->guard('pessoas')->attempt($credentials)) {

            return redirect()->route('manager');
        } else {
            return redirect('login')->withErrors(['errors' => 'Login Inválido'])->withInput();
        }
    }

    public function efetuarCadastro(Request $request) {

        $ativo = 1;

        $pessoas = Pessoas::create([
                    'nomeRazaoSocial' => $request['nomeRazaoSocial'],
                    'cpfCnpj' => $request['cpfCnpj'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                    'fone' => $request['fone'],
                    'sexo' => $request['sexo'],
                    'dataNasc' => $request['dataNasc'],
                    'ativo' => $ativo
        ]);

        if ($pessoas) {
            return redirect()->route('login');
        }
    }
}
