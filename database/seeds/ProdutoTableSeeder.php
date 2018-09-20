<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'codBarras'             => '7896011102566',
            'produtoNome'           => 'Biscoito Parati Água e Sal 370g',
            'qtd'                   => '50',
            'precoCusto'            => '2.79',
            'precoVenda'            => '4.35',
            'produtoSetorId'        => 6,
            'produtoCategoriaId'    => 18,
            'produtoMarcaId'        => 3,
            'produtoUnidadeId'      => 1,
            'produtoFornecedorId'   => 1,
            'imagem1'               => '1-1.png',
            'imagem2'               => '1-2.png',
            'imagem3'               => '',
            'isPromocao'            => 1,
            'isAtivo'               => 1,
        ]);
        
        DB::table('produtos')->insert([
            'codBarras'             => '7894900011517',
            'produtoNome'           => 'Refrigerante Coca Cola Pet 2L',
            'qtd'                   => '150',
            'precoCusto'            => '',
            'precoVenda'            => '',
            'produtoSetorId'        => '',
            'produtoCategoriaId'    => '',
            'produtoMarcaId'        => '',
            'produtoUnidadeId'      => '',
            'produtoFornecedorId'   => '',
            'imagem1'               => '',
            'imagem2'               => '',
            'imagem3'               => '',
            'isPromocao'            => '',
            'isAtivo'               => '',
        ]);
    }
}
