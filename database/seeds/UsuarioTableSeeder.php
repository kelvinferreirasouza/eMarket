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
            'sexo'          =>  'Masculino',
            'dataNasc'      =>  '1997-01-01',
            'tipoUsuario'   => 'Administrador'
        ]);
    }
}
