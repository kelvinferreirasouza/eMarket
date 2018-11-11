<?php

namespace App\Http\Controllers;

use Socialite;
use Auth;
use App\Cliente;

class FacebookController extends Controller {

    public function entrarFacebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function retornoFacebook() {

        $clienteSocial = Socialite::driver('facebook')->user();
        $email = $clienteSocial->getEmail();

        if (auth()->guard('clientes')->check()) {
            $usuario = Auth::guard('clientes');
            $usuario->facebook = $email;
            $usuario->save();
            
            return redirect()->intended('/minhaconta');
        }
        
        $usuario = Cliente::where('facebook', $email)->first();
        
        if(isset($usuario->nome)){
            Auth::guard('clientes')->login($usuario);
            return redirect()->intended('/minhaconta');
        }
        
        if(Cliente::where('email', $email)->count()){
            $usuario = Cliente::where('email', $email)->first();
            $usuario->facebook = $email;
            $usuario->save();
            Auth::guard('clientes')->login($usuario);
            return redirect()->intended('/minhaconta');
        }
    }

}
