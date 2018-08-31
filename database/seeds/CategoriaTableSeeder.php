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
            'nome'              => 'Pães',
            'produtoSetorId'    => 9,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Pizzas',
            'produtoSetorId'    => 4,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Bolos',
            'produtoSetorId'    => 9,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Salgados',
            'produtoSetorId'    => 9,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Frutas',
            'produtoSetorId'    => 8,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Hortaliças',
            'produtoSetorId'    => 8,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Legumes',
            'produtoSetorId'    => 8,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Ovos',
            'produtoSetorId'    => 6,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Refrigerantes',
            'produtoSetorId'    => 6,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Bebidas Alcólicas',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Águas Minerais',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Sucos e Bebidas',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Leites & Bebidas',
            'produtoSetorId'    => 2,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Presuntos & Queijos',
            'produtoSetorId'    => 7,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Manteigas & Margarinas',
            'produtoSetorId'    => 7,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Massas',
            'produtoSetorId'    => 6,
            'isAtivo'           => 1
        ]);

        DB::table('produtocategorias')->insert([
            'nome'              => 'Iogurtes & Sobremesas',
            'produtoSetorId'    => 7,
            'isAtivo'           => 1
        ]);

    }
       
    }
