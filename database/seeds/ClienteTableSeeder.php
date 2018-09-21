    <?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('clientes')->insert([
            'nome'          => 'Kelvin Souza',
            'email'         => 'kelvin@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-00',
            'rg'            => '1234567890',
            'sexo'          => 1,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'João Paulo Souza',
            'email'         => 'joao@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-01',
            'rg'            => '1234567891',
            'sexo'          => 1,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Maria Silva',
            'email'         => 'maria@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-02',
            'rg'            => '1234567892',
            'sexo'          => 2,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Silvia Ramos',
            'email'         => 'silvia@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-03',
            'rg'            => '1234567893',
            'sexo'          => 2,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Daiane Fagundes',
            'email'         => 'daiane@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-04',
            'rg'            => '1234567894',
            'sexo'          => 2,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Carlos Almeida',
            'email'         => 'carlos@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-05',
            'rg'            => '1234567895',
            'sexo'          => 1,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Jerriler Ferreira',
            'email'         => 'jerriler@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-06',
            'rg'            => '1234567896',
            'sexo'          => 1,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Janessa Ferreira',
            'email'         => 'janessa@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-07',
            'rg'            => '1234567897',
            'sexo'          => 2,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Fernando Vieira',
            'email'         => 'fernando@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-08',
            'rg'            => '1234567898',
            'sexo'          => 1,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Adeni Almeida',
            'email'         => 'adeni@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-09',
            'rg'            => '1234567899',
            'sexo'          => 2,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Raquel Soares',
            'email'         => 'raquel@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-10',
            'rg'            => '1234567810',
            'sexo'          => 2,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
        
        DB::table('clientes')->insert([
            'nome'          => 'Monica Lima',
            'email'         => 'monica@gmail.com',
            'password'      => bcrypt('admin'),
            'cpf'           => '123.456.789-11',
            'rg'            => '1234567811',
            'sexo'          => 2,
            'dataNasc'      => '1997-01-01',
            'cep'           => '96360-000',
            'logradouro'    => 'Rua X',
            'numero'        => 10,
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
    }
}
