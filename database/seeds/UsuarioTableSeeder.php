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
        
        DB::table('usuarios')->insert([
            'nome'          => 'João Paulo Souza',
            'login'         => 'joao',
            'email'         => 'joao@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-01',
            'rg'            =>  '1234567890',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1988-07-23'
        ]);

        DB::table('usuarios')->insert([
            'nome'          => 'José Antonio Peres',
            'login'         => 'jose',
            'email'         => 'jose@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-02',
            'rg'            =>  '1234567892',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);

        
        DB::table('usuarios')->insert([
            'nome'          => 'Joaquim Nunes',
            'login'         => 'joaquim',
            'email'         => 'joaquim@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.465.789-03',
            'rg'            =>  '1234567893',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);

        
        DB::table('usuarios')->insert([
            'nome'          => 'Gilmar Barbosa',
            'login'         => 'gilmar',
            'email'         => 'gilmar@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-03',
            'rg'            =>  '1234567894',
            'cargoId'       =>  1,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Daiane do Santos',
            'login'         => 'daiane',
            'email'         => 'daiane@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-05',
            'rg'            =>  '1234567895',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);

        DB::table('usuarios')->insert([
            'nome'          => 'Graciele Souza',
            'login'         => 'graciele',
            'email'         => 'gracile@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-06',
            'rg'            =>  '1234567896',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Silvia Marques',
            'login'         => 'silvia',
            'email'         => 'silvia@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-07',
            'rg'            =>  '1234567897',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Matheus Delgado',
            'login'         => 'matheus',
            'email'         => 'matheus@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-08',
            'rg'            =>  '1234567897',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Antonio Souza',
            'login'         => 'antonio',
            'email'         => 'antonio@gmail.com',
            'senha'         =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-09',
            'rg'            =>  '1234567897',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);    

    }
}
