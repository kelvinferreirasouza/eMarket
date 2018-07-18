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
            'nome'    => 'Padaria',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'HortiFruti',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Bebidas',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Frios & Laticinios',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Higiene',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Limpeza',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Mercearia',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Congelados',
            'isAtivo' => 1
        ]);

        DB::table('produtosetores')->insert([
            'nome'    => 'Carnes',
            'isAtivo' => 1
        ]);


    }
}
