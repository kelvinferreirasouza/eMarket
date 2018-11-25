<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Carrinho extends Model {

    private $items = [];

    public function __construct() {
        // verifica se a sessao ja existe
        if (Session::has('carrinho')) {
            $carrinho = Session::get('carrinho');

            $this->items = $carrinho->items;
        }
    }

    public function add(Produto $produto) {

        // verifica se o item já existe no carrinho, se sim soma + 1 na qtd
        if (isset($this->items[$produto->id])) {
            $this->items[$produto->id] = [
                'item' => $produto,
                'qtd' => $this->items[$produto->id]['qtd'] + 1,
            ];
        } else {
            $this->items[$produto->id] = [
                'item' => $produto,
                'qtd' => 1,
            ];
        }
    }

    public function remove(Produto $produto) {

        // verifica se esse produto existe
        if (isset($this->items[$produto->id])) {

            // verifica se o produto tem qtd 1, se sim, remove do array, se nao, diminui 1
            if ($this->items[$produto->id]['qtd'] == 1) {
                unset($this->items[$produto->id]);
            } else {
                $this->items[$produto->id] = [
                    'item' => $produto,
                    'qtd' => $this->items[$produto->id]['qtd'] - 1,
                ];
            }
        }
    }
    
    public function delete(Produto $produto) {

        // verifica se esse produto existe
        if (isset($this->items[$produto->id])) {

            // verifica se o produto tem qtd maior q 0, se sim, remove do array
            if ($this->items[$produto->id]['qtd'] > 0) {
                unset($this->items[$produto->id]);
            }
        }
    }

    public function getItems() {
        return $this->items;
    }
    
    public function total() {
        
        $total = 0;
        
        // verifica se a quantidade de itens é igual a zero
        if(count($this->items) == 0) {
            return $total;
        }
        
        // percorre a lista de itens calculando o subtotal e armazena o resultado na variavel total
        foreach($this->items as $item) {
            $subTotal = $item['item']->precoVenda * $item['qtd'];
            $total += $subTotal;
        }
        
        return $total;
    }
    
    public function totalItems(){
        // retorna a quantidade de itens do carrinho
        return count($this->items);
    }
    
    public function carrinhoVazio(){
        if(Session::has('carrinho')) {
            Session::forget('carrinho');
        }
    }

}
