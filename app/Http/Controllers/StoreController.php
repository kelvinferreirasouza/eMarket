<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Setor;
use App\Models\Categoria;

class StoreController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $setores = Setor::all();
        $categorias = Categoria::all();

        return view('store.index', compact('produtos','setores', 'categorias'));
    }
    
    public function carrinho()
    {
        $produtos = Produto::all();
        $setores = Setor::all();
        $categorias = Categoria::all();
        return view('store.carrinho', compact('produtos','setores', 'categorias'));
    }
}
