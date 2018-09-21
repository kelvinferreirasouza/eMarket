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
            'email'         => 'admin@admin.com',
            'password'      =>  bcrypt('admin'),
            'cpf'           =>  '000.000.000-73',
            'rg'            =>  '0000000000',
            'cargoId'       =>  1,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-01'
        ]);

        DB::table('usuarios')->insert([
            'nome'          => 'Kelvin Ferreira Souza',
            'email'         => 'kelvin@ferreirasouza.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '037.662.190-73',
            'rg'            =>  '1120854201',
            'cargoId'       =>  1,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'João Paulo Souza',
            'email'         => 'joao@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-01',
            'rg'            =>  '1234567890',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1988-07-23'
        ]);

        DB::table('usuarios')->insert([
            'nome'          => 'José Antonio Peres',
            'email'         => 'jose@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-02',
            'rg'            =>  '1234567892',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);

        
        DB::table('usuarios')->insert([
            'nome'          => 'Joaquim Nunes',
            'email'         => 'joaquim@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.465.789-03',
            'rg'            =>  '1234567893',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);

        
        DB::table('usuarios')->insert([
            'nome'          => 'Gilmar Barbosa',
            'email'         => 'gilmar@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-03',
            'rg'            =>  '1234567894',
            'cargoId'       =>  1,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Daiane do Santos',
            'email'         => 'daiane@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-05',
            'rg'            =>  '1234567895',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);

        DB::table('usuarios')->insert([
            'nome'          => 'Graciele Souza',
            'email'         => 'gracile@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-06',
            'rg'            =>  '1234567896',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Silvia Marques',
            'email'         => 'silvia@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-07',
            'rg'            =>  '1234567897',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Matheus Delgado',
            'email'         => 'matheus@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-08',
            'rg'            =>  '1234567897',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);
        
        DB::table('usuarios')->insert([
            'nome'          => 'Antonio Souza',
            'email'         => 'antonio@gmail.com',
            'password'      =>  bcrypt('kelvin'),
            'cpf'           =>  '123.456.789-09',
            'rg'            =>  '1234567897',
            'cargoId'       =>  3,
            'sexo'          =>  1,
            'dataNasc'      =>  '1997-01-17'
        ]);    

    }
}
