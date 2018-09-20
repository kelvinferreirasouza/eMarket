<?php

use Illuminate\Database\Seeder;

class UnidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtounidades')->insert([
            'descricao'    => 'Unidade',
            'sigla'        => 'UN',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'Kilograma',
            'sigla'        => 'KG',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'Caixa',
            'sigla'        => 'CX',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'Dúzia',
            'sigla'        => 'DZ',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'Fardo',
            'sigla'        => 'FRD',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'Litro',
            'sigla'        => 'L',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'Pacote',
            'sigla'        => 'PC',
            'isAtivo'      => 1
        ]);
    }
}
