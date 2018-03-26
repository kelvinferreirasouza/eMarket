<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = array('codBarras', 'produtoNome', 'produtoSetorId', 'produtoCategoriaId', 'produtoMarcaId', 'produtoUnidadeId', 'qtd', 'qtdMin', 'precoCusto', 'precoVenda', 'margemLucro', 'dataCadastro', 'horaCadastro', 'isPromocao', 'isAtivo');

    protected $table = 'produto';
}
