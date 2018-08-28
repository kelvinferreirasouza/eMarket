<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgProduto extends Model
{
    protected $fillable = [
        'codBarras', 'endereco', 
    ];

    protected $table = 'imgprodutos';
}
