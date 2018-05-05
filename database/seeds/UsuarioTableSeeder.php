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
            'nome'          => 'Kelvin Ferreira Souza',
            'login'         => 'kelvinfer4',
            'email'         => 'kelvin@ferreirasouza.com',
            'senha'         =>  bcrypt('123'),
            'cpf'           =>  '037.662.190-73',
            'rg'            =>  '1120854201',
            'sexo'          =>  'Masculino',
            'dataNasc'      =>  '1997-01-17',
            'tipoUsuario'   => 'Administrador'
        ]);

        DB::table('usuarios')->insert([
            'nome'          => 'Administrador',
            'login'         => 'admin',
            'email'         => 'admin@admin.com',
            'senha'         =>  bcrypt('admin'),
            'cpf'           =>  '000.000.000-73',
            'rg'            =>  '0000000000',
            'sexo'          =>  'Masculino',
            'dataNasc'      =>  '1997-01-01',
            'tipoUsuario'   => 'Administrador'
        ]);
    }
}
