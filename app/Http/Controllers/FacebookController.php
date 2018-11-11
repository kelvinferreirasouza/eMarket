<?php

namespace App\Http\Controllers;

use Socialite;
use Auth;
use App\Cliente;

class FacebookController extends Controller {

    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }
    
    public function handleProviderCallback($provider) {
        
        $cliente = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($cliente, $provider);
        
        Auth::guard('clientes')->login($authUser, true);
        return redirect()->route('minhaConta');
    }

    public function findOrCreateUser($cliente, $provider) {

        $authUser = Cliente::where('provider_id', $cliente->id)->first();
        
        if ($authUser) {
            return $authUser;
        }
        
        
        return Cliente::create([
                    'nome'        => $cliente->getName(),
                    'email'       => $cliente->getEmail(),
                    'password'    => bcrypt($cliente->token),
                    'provider'    => $provider,
                    'provider_id' => $cliente->id,
                    'cpf'         => '',
                    'sexo'        => '1',
                    'dataNasc'    => '2018-01-01',
                    'foto'        => $cliente->getAvatar(),
                    'isAtivo'     => '1'
        ]);
    }

}
