<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    protected $fillable = [
        'codBarras', 'produtoNome', 'qtd', 'qtdMin', 'precoCusto', 'precoVenda',
        'margemLucro', 'produtoSetorId', 'produtoCategoriaId', 'produtoMarca',
        'produtoUnidadeId', 'produtoFornecedorId', 'imagem1', 'imagem2', 'imagem3', 'isPromocao', 'isAtivo'
    ];
    public $rules = [
        'codBarras' => 'required|numeric',
        'produtoNome' => 'required|min:3|max:100',
        'qtd' => 'required|numeric',
        'precoVenda' => 'required|numeric',
        'produtoSetorId' => 'required',
        'produtoCategoriaId' => 'required',
        'produtoUnidadeId' => 'required',
        'produtoFornecedorId' => 'required',
    ];
    public $messages = [
        'codBarras.required' => 'O campo Código de Barras é obrigatório!',
        'produtoNome.required' => 'O campo Descrição é obrigatório!',
        'qtd.required' => 'O campo Quantidade é obrigatório!',
        'precoVenda.required' => 'O campo Preço de Venda é obrigatório!',
        'produtoSetorId.required' => 'O campo Setor é obrigatório!',
        'produtoCategoriaId.required' => 'O campo Categoria é obrigatório!',
        'produtoUnidadeId.required' => 'O campo Unidade é obrigatório!',
        'produtoFornecedorId.required' => 'O campo Fornecedor é obrigatório!',
    ];

    public function setor() {
        return $this->belongsTo('App\Setor', 'produtoSetorId');
    }

    public function categoria() {
        return $this->belongsTo('App\Categoria', 'produtoCategoriaId');
    }

    public function unidade() {
        return $this->belongsTo('App\Unidade', 'produtoUnidadeId');
    }

    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor', 'produtoFornecedorId');
    }

    public function pesquisa($request) {
        $keySearch = $request->key_search;

        return $this->where('codBarras', 'LIKE', "%{$keySearch}%")
                        ->orWhere('produtoNome', 'LIKE', "%{$keySearch}%")
                        ->orWhere('produtoMarca', 'LIKE', "%{$keySearch}%")
                        ->paginate(10);
    }

}
