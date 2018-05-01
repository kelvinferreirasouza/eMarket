<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listar()
    {
        $produtos = Produto::all();
        return view('produtos.listar', compact('produtos'));
    }
}
