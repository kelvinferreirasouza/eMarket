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
    Route::get('/usuarios', 'UsuarioController@listar')->name('listar');
    Route::get('/usuarios/{id}/editar', 'UsuarioController@editar')->name('editar');
    Route::post('/usuarios/{id}/atualizar', 'UsuarioController@atualizar')->name('atualizar');
    Route::get('/usuarios/{id}/visualizar', 'UsuarioController@visualizar')->name('visualizar');
    Route::get('/usuarios/{id}/excluir', 'UsuarioController@excluir')->name('excluir');

    /* Rotas Protegidas de Produtos */
    Route::get('/produtos', 'ProdutoController@listar')->name('listar');
  });
