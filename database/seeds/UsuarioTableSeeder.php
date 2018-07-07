<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome'          => 'Administrador',
            'login'         => 'admin',
            'email'         => 'admin@admin.com',
            'senha'         =>  bcrypt('admin'),
            'cpf'           =>  '000.000.000-73',
            'rg'            =>  '0000000000',
            'cargoId'       =>  1,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-01'
        ]);

        DB::table('usuarios')->insert([
            'nome'          => 'Kelvin Ferreira Souza',
            'login'         => 'kelvin',
            'email'         => 'kelvin@ferreirasouza.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '037.662.190-73',
            'rg'            =>  '1120854201',
            'cargoId'       =>  1,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);


    }
}
