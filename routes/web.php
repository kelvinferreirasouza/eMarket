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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manager', function () {
    return view('manager');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'PessoaController@register')->name('register');

Route::get('/login', 'PessoaController@login')->name('login');

Route::post('pessoa.login.efetuar', 'PessoaController@efetuarLogin')->name('pessoa.login.efetuar');

Route::post('efetuarCadastro', 'PessoaController@efetuarCadastro')->name('efetuarCadastro');


