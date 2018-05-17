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
Route::get('/', 'AutenticacaoController@index')->name('index');
Route::get('/logout', 'AutenticacaoController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/manager', 'AutenticacaoController@manager')->name('manager');

    /* Rotas Protegidas de Usuários */
    Route::get('/usuarios', 'UsuarioController@listarUsuarios')->name('listarUsuarios');
    Route::post('/usuarios/atualizar/{id}', 'UsuarioController@atualizarUsuario')->name('atualizarUsuario');
    Route::get('/usuarios/excluir/{id}', 'UsuarioController@excluirUsuario')->name('excluirUsuario');
    Route::get('/usuarios/cadastrar', 'UsuarioController@cadastrarUsuario')->name('cadastrarUsuario');
    Route::post('/usuarios/salvar', 'UsuarioController@salvarUsuario')->name('salvarUsuario');

     /* Rotas Protegidas de Fornecedores */
    Route::get('/pessoas/fornecedores', 'FornecedorController@listarFornecedores')->name('listarFornecedores');
    Route::get('/pessoas/fornecedores/cadastrar', 'FornecedorController@cadastrarFornecedor')->name('cadastrarFornecedor');
    Route::post('/pessoas/fornecedores/salvar', 'FornecedorController@salvarFornecedor')->name('salvarFornecedor');
    Route::get('/pessoas/fornecedores/excluir/{id}', 'FornecedorController@excluirFornecedor')->name('excluirFornecedor');
    Route::post('/pessoas/fornecedores/atualizar/{id}', 'FornecedorController@atualizarFornecedor')->name('atualizarFornecedor');

    /* Rotas Protegidas de Produtos */
    Route::get('/produtos', 'ProdutoController@listarProdutos')->name('listarProdutos');
    Route::get('/produtos/excluir/{id}', 'ProdutoController@excluirProduto')->name('excluirProduto');
    Route::post('/produtos/atualizar/{id}', 'ProdutoController@atualizarProduto')->name('atualizarProduto');
    Route::post('/produtos/salvar', 'ProdutoController@salvarProduto')->name('salvarProduto');
    Route::get('/produtos/cadastrar', 'ProdutoController@cadastrarProduto')->name('cadastrarProduto');

    /* Rotas Protegidas de Setores */
    Route::get('/produtos/setores', 'SetorController@listarSetores')->name('listarSetores');
    Route::get('/produtos/setores/excluir/{id}', 'SetorController@excluirSetor')->name('excluirSetor');
    Route::post('/produtos/setores/atualizar/{id}', 'SetorController@atualizarSetor')->name('atualizarSetor');
    Route::get('/produtos/setores/cadastrar', 'SetorController@cadastrarSetor')->name('cadastrarSetor');  
    Route::post('/produtos/setores/salvar', 'SetorController@salvarSetor')->name('salvarSetor');

    /* Rotas Protegidas de Categorias */
    Route::get('/produtos/categorias', 'CategoriaController@listarCategorias')->name('listarCategorias');
    Route::get('/produtos/categorias/cadastrar', 'CategoriaController@cadastrarCategoria')->name('cadastrarCategoria');      
    Route::post('/produtos/categorias/salvar', 'CategoriaController@salvarCategoria')->name('salvarCategoria');
    Route::post('/produtos/categorias/atualizar/{id}', 'CategoriaController@atualizarCategoria')->name('atualizarCategoria');
    Route::get('/produtos/categorias/excluir/{id}', 'CategoriaController@excluirCategoria')->name('excluirCategoria');

    /* Rotas Protegidas de Sub-Categorias */
     Route::get('/produtos/categorias/subcategorias', 'SubcategoriaController@listarSubcategorias')->name('listarSubcategorias');
    Route::get('/produtos/categorias/subcategorias/cadastrar', 'SubcategoriaController@cadastrarSubcategoria')->name('cadastrarSubcategoria');  
    Route::post('/produtos/categorias/subcategorias/salvar', 'SubcategoriaController@salvarSubcategoria')->name('salvarSubcategoria');  
    Route::get('/produtos/categorias/subcategorias/excluir/{id}', 'SubcategoriaController@excluirSubcategoria')->name('excluirSubcategoria');
    Route::post('/produtos/categorias/subcategorias/atualizar/{id}', 'SubcategoriaController@atualizarSubcategoria')->name('atualizarSubcategoria');

    /* Rotas Protegidas de Unidades */
    Route::get('/produtos/unidades', 'UnidadeController@listarUnidades')->name('listarUnidades');
    Route::get('/produtos/unidades/cadastrar', 'UnidadeController@cadastrarUnidade')->name('cadastrarUnidade');  
    Route::post('/produtos/unidades/salvar', 'UnidadeController@salvarUnidade')->name('salvarUnidade');    
    Route::post('/produtos/unidades/atualizar/{id}', 'UnidadeController@atualizarUnidade')->name('atualizarUnidade');
    Route::get('/produtos/unidades/excluir/{id}', 'UnidadeController@excluirUnidade')->name('excluirUnidade');

    /* Rotas Protegidas de Marcas */
    Route::get('/produtos/marcas', 'MarcaController@listarMarcas')->name('listarMarcas');
    Route::get('/produtos/marcas/cadastrar', 'MarcaController@cadastrarMarca')->name('cadastrarMarca');  
    Route::post('/produtos/marcas/salvar', 'MarcaController@salvarMarca')->name('salvarMarca');  
    Route::post('/produtos/marcas/atualizar/{id}', 'MarcaController@atualizarMarca')->name('atualizarMarca');
    Route::get('/produtos/marcas/excluir/{id}', 'MarcaController@excluirMarca')->name('excluirMarca');

    /* Rotas Protegidas de Cargos */
     Route::get('/usuarios/cargos', 'CargoController@listarCargos')->name('listarCargos');
    Route::get('/usuarios/cargos/cadastrar', 'CargoController@cadastrarCargo')->name('cadastrarCargo');  
    Route::post('/usuarios/cargos/salvar', 'CargoController@salvarCargo')->name('salvarCargo');  
    Route::post('/usuarios/cargos/atualizar/{id}', 'CargoController@atualizarCargo')->name('atualizarCargo');
    Route::get('/usuarios/cargos/excluir/{id}', 'CargoController@excluirCargo')->name('excluirCargo');

  /* Rotas Protegidas de Formas de Pagamentos */
    Route::get('/financeiro/formaspagamentos', 'FormaPagamentoController@listarFormasPag')->name('listarFormasPag');
    Route::get('/financeiro/formaspagamentos/cadastrar', 'FormaPagamentoController@cadastrarFormaPag')->name('cadastrarFormaPag');  
    Route::post('/financeiro/formaspagamentos/salvar', 'FormaPagamentoController@salvarFormaPag')->name('salvarFormaPag');  
    Route::get('/financeiro/formaspagamentos/excluir/{id}', 'FormaPagamentoController@excluirFormaPag')->name('excluirFormaPag');
    Route::post('/financeiro/formaspagamentos/atualizar/{id}', 'FormaPagamentoController@atualizarFormaPag')->name('atualizarFormaPag'); 

    /* Rotas Utilizadas no Ajax */
    Route::get('ajax/pegar-lista-categorias','ProdutoController@getCategoriasAjax');

  });
