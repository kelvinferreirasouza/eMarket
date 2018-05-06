<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtocategorias')->insert([
            'nome'              => 'LEGUMES',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'VERDURAS',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'BOLOS',
            'produtoSetorId'    => 1,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'SALGADOS',
            'produtoSetorId'    => 1,
            'isAtivo'           => 1
        ]);
    }
}
