<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'codBarras', 'produtoNome', 'qtd', 'qtdMin', 'precoCusto', 'precoVenda', 'margemLucro', 'produtoSetorId', 'produtoCategoriaId', 'produtoMarcaId', 'produtoUnidadeId', 'produtoFornecedorId', 'isPromocao','isAtivo' 
    ];

    public function setor() {
        return $this->belongsTo('App\Setor', 'produtoSetorId' );
    }

    public function categoria() {
        return $this->belongsTo('App\Categoria', 'produtoCategoriaId');
    }

    public function marca() {
        return $this->belongsTo('App\Marca', 'produtoMarcaId');
    }

    public function unidade() {
        return $this->belongsTo('App\Unidade', 'produtoUnidadeId');
    }

        public function fornecedor() {
        return $this->belongsTo('App\Fornecedor', 'produtoFornecedorId');
    }
}
