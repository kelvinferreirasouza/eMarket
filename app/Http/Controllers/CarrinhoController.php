<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Setor;
use App\Models\Categoria;
use App\Models\Carrinho;
use Session;

class CarrinhoController extends Controller {

    public function carrinho() {
        $setores = Setor::all();
        $categorias = Categoria::all();
        
        // verifica se a sessao carrinho existe se n cria um novo objeto de carrinho
        $carrinho = Session::has('carrinho') ? Session::get('carrinho') : new Carrinho;
        $total = $carrinho->total();
        $produtos = $carrinho->getItems();

        return view('store.carrinho', compact('produtos', 'setores', 'categorias', 'total'));
    }

    public function addCarrinho(Request $request, $id) {

        $produto = Produto::find($id);

        // verifica se o produto existe, caso contrario retorna para a index
        if (!$produto)
            return redirect()->route('index');


        $carrinho = new Carrinho;
        $carrinho->add($produto);

        // atualiza a sessao do carrinho
        $request->session()->put('carrinho', $carrinho);
        return redirect()->route('carrinho');
    }

    public function remove(Request $request, $id) {

        $produto = Produto::find($id);

        // verifica se o produto existe, caso contrario retorna para a index
        if (!$produto)
            return redirect()->route('index');

        $carrinho = new Carrinho;
        $carrinho->remove($produto);

        // atualiza a sessao do carrinho
        $request->session()->put('carrinho', $carrinho);
        return redirect()->route('carrinho');
    }

}
