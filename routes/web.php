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
    Route::get('/usuarios/editar/{id}', 'UsuarioController@editarUsuario')->name('editarUsuario');
    Route::post('/usuarios/atualizar/{id}', 'UsuarioController@atualizarUsuario')->name('atualizarUsuario');
    Route::get('/usuarios/visualizar/{id}', 'UsuarioController@visualizarUsuario')->name('visualizarUsuario');
    Route::get('/usuarios/excluir/{id}', 'UsuarioController@excluirUsuario')->name('excluirUsuario');
    Route::get('/usuarios/cadastrar', 'UsuarioController@cadastrarUsuario')->name('cadastrarUsuario');
    Route::post('/usuarios/salvar', 'UsuarioController@salvarUsuario')->name('salvarUsuario');

    /* Rotas Protegidas de Produtos */
    Route::get('/produtos', 'ProdutoController@listarProdutos')->name('listarProdutos');
    Route::get('/produtos/excluir/{id}', 'ProdutoController@excluirProduto')->name('excluirProduto');
    Route::get('/produtos/editar/{id}', 'ProdutoController@editarProduto')->name('editarProduto');
    Route::post('/produtos/atualizar/{id}', 'ProdutoController@atualizarProduto')->name('atualizarProduto');
    Route::get('/produtos/visualizar/{id}', 'ProdutoController@visualizarProduto')->name('visualizarProduto');
    Route::post('/produtos/salvar', 'ProdutoController@salvarProduto')->name('salvarProduto');
    Route::get('/produtos/cadastrar', 'ProdutoController@cadastrarProduto')->name('cadastrarProduto');

    /* Rotas Protegidas de Setores */
    Route::get('/produtos/setores', 'SetorController@listarSetores')->name('listarSetores');
    Route::get('/produtos/setores/excluir/{id}', 'SetorController@excluirSetor')->name('excluirSetor');
    Route::get('/produtos/setores/editar/{id}', 'SetorController@editarSetor')->name('editarSetor');
    Route::post('/produtos/setores/atualizar/{id}', 'SetorController@atualizarSetor')->name('atualizarSetor');
    Route::get('/produtos/setores/visualizar/{id}', 'SetorController@visualizarSetor')->name('visualizarSetor');
    Route::get('/produtos/setores/cadastrar', 'SetorController@cadastrarSetor')->name('cadastrarSetor');  
    Route::post('/produtos/setores/salvar', 'SetorController@salvarSetor')->name('salvarSetor');

    /* Rotas Protegidas de Categorias */
    Route::get('/produtos/categorias', 'CategoriaController@listarCategorias')->name('listarCategorias');
    Route::get('/produtos/categorias/cadastrar', 'CategoriaController@cadastrarCategoria')->name('cadastrarCategoria');      
    Route::post('/produtos/categorias/salvar', 'CategoriaController@salvarCategoria')->name('salvarCategoria');
    Route::get('/produtos/categorias/editar/{id}', 'CategoriaController@editarCategoria')->name('editarCategoria');
    Route::post('/produtos/categorias/atualizar/{id}', 'CategoriaController@atualizarCategoria')->name('atualizarCategoria');
    Route::get('/produtos/categorias/visualizar/{id}', 'CategoriaController@visualizarCategoria')->name('visualizarCategoria');
    Route::get('/produtos/categorias/excluir/{id}', 'CategoriaController@excluirCategoria')->name('excluirCategoria');

    /* Rotas Protegidas de Sub-Categorias */
     Route::get('/produtos/categorias/subcategorias', 'SubcategoriaController@listarSubcategorias')->name('listarSubcategorias');
    Route::get('/produtos/categorias/subcategorias/cadastrar', 'SubcategoriaController@cadastrarSubcategoria')->name('cadastrarSubcategoria');  
    Route::post('/produtos/categorias/subcategorias/salvar', 'SubcategoriaController@salvarSubcategoria')->name('salvarSubcategoria');  

    /* Rotas Protegidas de Unidades */
    Route::get('/produtos/unidades', 'UnidadeController@listarUnidades')->name('listarUnidades');
    Route::get('/produtos/unidades/cadastrar', 'UnidadeController@cadastrarUnidade')->name('cadastrarUnidade');  
    Route::post('/produtos/unidades/salvar', 'UnidadeController@salvarUnidade')->name('salvarUnidade');    
    Route::get('/produtos/unidades/editar/{id}', 'UnidadeController@editarUnidade')->name('editarUnidade');
    Route::post('/produtos/unidades/atualizar/{id}', 'UnidadeController@atualizarUnidade')->name('atualizarUnidade');
    Route::get('/produtos/unidades/visualizar/{id}', 'UnidadeController@visualizarUnidade')->name('visualizarUnidade');
    Route::get('/produtos/unidades/excluir/{id}', 'UnidadeController@excluirUnidade')->name('excluirUnidade');

    /* Rotas Protegidas de Marcas */
    Route::get('/produtos/marcas', 'MarcaController@listarMarcas')->name('listarMarcas');
    Route::get('/produtos/marcas/cadastrar', 'MarcaController@cadastrarMarca')->name('cadastrarMarca');  
    Route::post('/produtos/marcas/salvar', 'MarcaController@salvarMarca')->name('salvarMarca');  
    Route::get('/produtos/marcas/editar/{id}', 'MarcaController@editarMarca')->name('editarMarca');  
    Route::post('/produtos/marcas/atualizar/{id}', 'MarcaController@atualizarMarca')->name('atualizarMarca');
    Route::get('/produtos/marcas/visualizar/{id}', 'MarcaController@visualizarMarca')->name('visualizarMarca');
    Route::get('/produtos/marcas/excluir/{id}', 'MarcaController@excluirMarca')->name('excluirMarca');

    /* Rotas Protegidas de Cargos */
     Route::get('/usuarios/cargos', 'CargoController@listarCargos')->name('listarCargos');
    Route::get('/usuarios/cargos/cadastrar', 'CargoController@cadastrarCargo')->name('cadastrarCargo');  
    Route::post('/usuarios/cargos/salvar', 'CargoController@salvarCargo')->name('salvarCargo');  
    Route::get('/usuarios/cargos/editar/{id}', 'CargoController@editarCargo')->name('editarCargo');  
    Route::post('/usuarios/cargos/atualizar/{id}', 'CargoController@atualizarCargo')->name('atualizarCargo');
    Route::get('/usuarios/cargos/visualizar/{id}', 'CargoController@visualizarCargo')->name('visualizarCargo');

    /* Rotas Utilizadas no Ajax */
    Route::get('ajax/pegar-lista-categorias','ProdutoController@getCategoriasAjax');

  });
