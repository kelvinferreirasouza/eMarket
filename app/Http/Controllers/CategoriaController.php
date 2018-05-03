<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function cadastrarCategoria()
    {
        return view('categorias.cadastrar');
    }
}
