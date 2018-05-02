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
    Route::get('/usuarios/{id}/editarUsuario', 'UsuarioController@editarUsuario')->name('editarUsuario');
    Route::post('/usuarios/{id}/atualizarUsuario', 'UsuarioController@atualizarUsuario')->name('atualizarUsuario');
    Route::get('/usuarios/{id}/visualizarUsuario', 'UsuarioController@visualizarUsuario')->name('visualizarUsuario');
    Route::get('/usuarios/{id}/excluirUsuario', 'UsuarioController@excluirUsuario')->name('excluirUsuario');

    /* Rotas Protegidas de Produtos */
    Route::get('/produtos', 'ProdutoController@listarProdutos')->name('listarProdutos');
    Route::get('/produtos/{id}/excluirProduto', 'ProdutoController@excluirProduto')->name('excluirProduto');
    Route::get('/produtos/{id}/editarProduto', 'ProdutoController@editarProduto')->name('editarProduto');
    Route::post('/produtos/{id}/atualizarProduto', 'ProdutoController@atualizarProduto')->name('atualizarProduto');
    Route::get('/produtos/{id}/visualizarProduto', 'ProdutoController@visualizarProduto')->name('visualizarProduto');
    Route::post('/salvarProduto', 'ProdutoController@salvarProduto')->name('salvarProduto');
    Route::get('/cadastrarProduto', 'ProdutoController@cadastrarProduto')->name('cadastrarProduto');
  });
