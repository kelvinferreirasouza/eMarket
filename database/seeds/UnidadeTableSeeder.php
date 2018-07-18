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
            'descricao'    => 'UNIDADE',
            'sigla'        => 'UN',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'KILOGRAMA',
            'sigla'        => 'KG',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'CAIXA',
            'sigla'        => 'CX',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'DUZIA',
            'sigla'        => 'DZ',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'FARDO',
            'sigla'        => 'FRD',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'LITRO',
            'sigla'        => 'L',
            'isAtivo'      => 1
        ]); 

        DB::table('produtounidades')->insert([
            'descricao'    => 'PEÇA',
            'sigla'        => 'PC',
            'isAtivo'      => 1
        ]);
    }
}
