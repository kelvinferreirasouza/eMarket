<?php

use Illuminate\Database\Seeder;

class SetorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtosetores')->insert([
            'nome'    => 'Bazar',
            'imagem'  => '',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Bebidas',
            'imagem'     => '2.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Carnes',
            'imagem'     => '3.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Congelados',
            'imagem'     => '4.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Dietéticos & Naturais',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Mercearia',
            'imagem'     => '6.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Frios & Laticinios',
            'imagem'     => '7.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Hortifruti',
            'imagem'     => '8.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Padaria',
            'imagem'     => '9.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Higiene',
            'imagem'     => '10.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Limpeza',
            'imagem'     => '11.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'       => 'Pet Shop',
            'imagem'     => '12.svg',
            'isDestaque' => 1,
            'isAtivo'    => 1
        ]);


    }
}
