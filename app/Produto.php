<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'codBarras', 'produtoNome', 'qtd', 'qtdMin', 'precoCusto', 'precoVenda', 'margemLucro', 'produtoSetorId', 'produtoCategoriaId', 'produtoMarcaId', 'produtoUnidadeId', 
    ];
}
