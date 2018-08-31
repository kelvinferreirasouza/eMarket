<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setor;
use App\Categoria;

class StoreController extends Controller
{
    public function index()
    {
        $setores = Setor::all();
        $categorias = Categoria::all();
        return view('store.index', compact('setores', 'categorias'));
    }
    
    public function carrinho()
    {
        return view('store.carrinho');
    }
}
