<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Usuario' => 'App\Policies\UsuarioPolicy',
        'App\Produto' => 'App\Policies\ProdutoPolicy',
        'App\Setor' => 'App\Policies\SetorPolicy',
        'App\Categoria' => 'App\Policies\CategoriaPolicy',
        'App\Unidade' => 'App\Policies\UnidadePolicy',
        'App\Cliente' => 'App\Policies\ClientePolicy',
        'App\Fornecedor' => 'App\Policies\FornecedorPolicy',
        'App\Frete' => 'App\Policies\FretePolicy',
        'App\Cargo' => 'App\Policies\CargoPolicy',
        'App\Empresa' => 'App\Policies\EmpresaPolicy',
        'App\Pedido' => 'App\Policies\PedidoPolicy',
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();
    }

}
