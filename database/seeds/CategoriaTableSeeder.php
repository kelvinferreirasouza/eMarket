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
            'nome'              => 'Legumes',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Verduras',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Bolos',
            'produtoSetorId'    => 1,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Salgados',
            'produtoSetorId'    => 1,
            'isAtivo'           => 1
        ]);
    }
}
