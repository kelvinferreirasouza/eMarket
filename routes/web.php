<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/registrar', 'UsuarioController@registrar')->name('registrar');
Route::post('/salvar', 'UsuarioController@salvar')->name('salvar');
Route::get('/login', 'AutenticacaoController@login')->name('login');
Route::post('/logar', 'AutenticacaoController@logar')->name('logar');
Route::get('/', 'StoreController@index')->name('index');
Route::get('/logout', 'AutenticacaoController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/manager', 'AutenticacaoController@manager')->name('manager');

    /* Rotas Protegidas de Usuários */
    Route::get('/usuarios', 'UsuarioController@listarUsuarios')->name('listarUsuarios');
    Route::post('/usuarios/atualizar/{id}', 'UsuarioController@atualizarUsuario')->name('atualizarUsuario');
    Route::post('/usuarios/salvar', 'UsuarioController@salvarUsuario')->name('salvarUsuario');
    Route::get('/usuarios/excluir/{id}', 'UsuarioController@excluirUsuario')->name('excluirUsuario');
    

     /* Rotas Protegidas de Fornecedores */
    Route::get('/pessoas/fornecedores', 'FornecedorController@listarFornecedores')->name('listarFornecedores');
    Route::post('/pessoas/fornecedores/atualizar/{id}', 'FornecedorController@atualizarFornecedor')->name('atualizarFornecedor');
    Route::post('/pessoas/fornecedores/salvar', 'FornecedorController@salvarFornecedor')->name('salvarFornecedor');
    Route::get('/pessoas/fornecedores/excluir/{id}', 'FornecedorController@excluirFornecedor')->name('excluirFornecedor');

     /* Rotas Protegidas de Clientes */
    Route::get('/pessoas/clientes', 'ClienteController@listarClientes')->name('listarClientes');
    Route::post('/pessoas/clientes/atualizar/{id}', 'ClienteController@atualizarCliente')->name('atualizarCliente');
    Route::post('/pessoas/clientes/salvar', 'ClienteController@salvarCliente')->name('salvarCliente');
    Route::get('/pessoas/clientes/excluir/{id}', 'ClienteController@excluirCliente')->name('excluirCliente');
    
     /* Rotas Protegidas de Empresas */
    Route::get('/empresas', 'EmpresaController@listarEmpresas')->name('listarEmpresas');
    Route::post('/empresas/atualizar/{id}', 'EmpresaController@atualizarEmpresa')->name('atualizarEmpresa');
    Route::post('/empresas/salvar', 'EmpresaController@salvarEmpresa')->name('salvarEmpresa');
    Route::get('/empresas/excluir/{id}', 'EmpresaController@excluirEmpresa')->name('excluirEmpresa');
    

    /* Rotas Protegidas de Produtos */
    Route::get('/produtos', 'ProdutoController@listarProdutos')->name('listarProdutos');
    Route::post('/produtos/atualizar/{id}', 'ProdutoController@atualizarProduto')->name('atualizarProduto');
    Route::post('/produtos/salvar', 'ProdutoController@salvarProduto')->name('salvarProduto');
    Route::get('/produtos/excluir/{id}', 'ProdutoController@excluirProduto')->name('excluirProduto');

    /* Rotas Protegidas de Setores */
    Route::get('/produtos/setores', 'SetorController@listarSetores')->name('listarSetores');
    Route::post('/produtos/setores/atualizar/{id}', 'SetorController@atualizarSetor')->name('atualizarSetor');
    Route::post('/produtos/setores/salvar', 'SetorController@salvarSetor')->name('salvarSetor');
    Route::get('/produtos/setores/excluir/{id}', 'SetorController@excluirSetor')->name('excluirSetor');

    /* Rotas Protegidas de Categorias */
    Route::get('/produtos/categorias', 'CategoriaController@listarCategorias')->name('listarCategorias'); 
    Route::post('/produtos/categorias/atualizar/{id}', 'CategoriaController@atualizarCategoria')->name('atualizarCategoria');
    Route::post('/produtos/categorias/salvar', 'CategoriaController@salvarCategoria')->name('salvarCategoria');
    Route::get('/produtos/categorias/excluir/{id}', 'CategoriaController@excluirCategoria')->name('excluirCategoria');

    /* Rotas Protegidas de Sub-Categorias */
    Route::get('/produtos/categorias/subcategorias', 'SubcategoriaController@listarSubcategorias')->name('listarSubcategorias');
    Route::post('/produtos/categorias/subcategorias/atualizar/{id}', 'SubcategoriaController@atualizarSubcategoria')->name('atualizarSubcategoria');
    Route::post('/produtos/categorias/subcategorias/salvar', 'SubcategoriaController@salvarSubcategoria')->name('salvarSubcategoria');  
    Route::get('/produtos/categorias/subcategorias/excluir/{id}', 'SubcategoriaController@excluirSubcategoria')->name('excluirSubcategoria');
    
    /* Rotas Protegidas de Unidades */
    Route::get('/produtos/unidades', 'UnidadeController@listarUnidades')->name('listarUnidades');
    Route::post('/produtos/unidades/atualizar/{id}', 'UnidadeController@atualizarUnidade')->name('atualizarUnidade');
    Route::post('/produtos/unidades/salvar', 'UnidadeController@salvarUnidade')->name('salvarUnidade');    
    Route::get('/produtos/unidades/excluir/{id}', 'UnidadeController@excluirUnidade')->name('excluirUnidade');

    /* Rotas Protegidas de Marcas */
    Route::get('/produtos/marcas', 'MarcaController@listarMarcas')->name('listarMarcas'); 
    Route::post('/produtos/marcas/atualizar/{id}', 'MarcaController@atualizarMarca')->name('atualizarMarca');
    Route::post('/produtos/marcas/salvar', 'MarcaController@salvarMarca')->name('salvarMarca');  
    Route::get('/produtos/marcas/excluir/{id}', 'MarcaController@excluirMarca')->name('excluirMarca');

    /* Rotas Protegidas de Cargos */
    Route::get('/usuarios/cargos', 'CargoController@listarCargos')->name('listarCargos'); 
    Route::post('/usuarios/cargos/atualizar/{id}', 'CargoController@atualizarCargo')->name('atualizarCargo');
    Route::post('/usuarios/cargos/salvar', 'CargoController@salvarCargo')->name('salvarCargo');
    Route::get('/usuarios/cargos/excluir/{id}', 'CargoController@excluirCargo')->name('excluirCargo');

    /* Rotas Protegidas de Formas de Pagamentos */
    Route::get('/financeiro/formaspagamentos', 'FormaPagamentoController@listarFormasPag')->name('listarFormasPag');
    Route::post('/financeiro/formaspagamentos/atualizar/{id}', 'FormaPagamentoController@atualizarFormaPag')->name('atualizarFormaPag'); 
    Route::post('/financeiro/formaspagamentos/salvar', 'FormaPagamentoController@salvarFormaPag')->name('salvarFormaPag');  
    Route::get('/financeiro/formaspagamentos/excluir/{id}', 'FormaPagamentoController@excluirFormaPag')->name('excluirFormaPag');
    
    /* Rotas Protegidas de Pedidos */
    Route::get('/vendas/pedidos', 'PedidoController@listarPedidos')->name('listarPedidos');
    Route::post('/vendas/pedidos/atualizar/{id}', 'PedidoController@atualizarPedido')->name('atualizarPedido'); 
    Route::post('/vendas/pedidos/salvar', 'PedidoController@salvarPedido')->name('salvarPedido');  
    Route::get('/vendas/pedidos/excluir/{id}', 'PedidoController@excluirPedido')->name('excluirPedido');
    
    /* Rotas Protegidas de Veiculos */
    Route::get('/entregas/veiculos', 'VeiculoController@listarVeiculos')->name('listarVeiculos');
    Route::post('/entregas/veiculos/atualizar/{id}', 'VeiculoController@atualizarVeiculo')->name('atualizarVeiculo'); 
    Route::post('/entregas/veiculos/salvar', 'VeiculoController@salvarVeiculo')->name('salvarVeiculo');  
    Route::get('/entregas/veiculos/excluir/{id}', 'VeiculoController@excluirVeiculo')->name('excluirVeiculo');
    
    /* Rotas Protegidas de Marcas de Veiculos */
    Route::get('/entregas/veiculos/marcas', 'VeiculoMarcaController@listarVeiculoMarcas')->name('listarVeiculoMarcas');
    Route::post('/entregas/veiculos/marcas/atualizar/{id}', 'VeiculoMarcaController@atualizarVeiculoMarca')->name('atualizarVeiculoMarca'); 
    Route::post('/entregas/veiculos/marcas/salvar', 'VeiculoMarcaController@salvarVeiculoMarca')->name('salvarVeiculoMarca');  
    Route::get('/entregas/veiculos/marcas/excluir/{id}', 'VeiculoMarcaController@excluirVeiculoMarca')->name('excluirVeiculoMarca');
    
    /* Rotas Protegidas de Modelos de Veiculos */
    Route::get('/entregas/veiculos/modelos', 'VeiculoModeloController@listarVeiculoModelos')->name('listarVeiculoModelos');
    Route::post('/entregas/veiculos/modelos/atualizar/{id}', 'VeiculoModeloController@atualizarVeiculoModelo')->name('atualizarVeiculoModelo'); 
    Route::post('/entregas/veiculos/modelos/salvar', 'VeiculoModeloController@salvarVeiculoModelo')->name('salvarVeiculoModelo');  
    Route::get('/entregas/veiculos/modelos/excluir/{id}', 'VeiculoModeloController@excluirVeiculoModelo')->name('excluirVeiculoModelo');
    
    /* Rotas Utilizadas no Ajax */
    Route::get('ajax/pegar-lista-categorias','ProdutoController@getCategoriasAjax');
    Route::get('ajax/pegar-lista-modelos','VeiculoController@getModelosAjax');

  });
