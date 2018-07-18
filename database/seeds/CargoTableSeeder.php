<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuariocargos')->insert([
            'nome'              => 'Administrador',
            'descricao'   		=> 'Usuários que administra o sistema',
            'isAtivo'           => 1
        ]);

        DB::table('usuariocargos')->insert([
            'nome'              => 'Gerente',
            'descricao'   		=> 'Funcionário que gerencia o sistema',
            'isAtivo'           => 1
        ]);

        DB::table('usuariocargos')->insert([
            'nome'              => 'Funcionário',
            'descricao'   		=> 'Funcionário da Empresa',
            'isAtivo'           => 1
        ]);
    }
}
