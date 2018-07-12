<?php

use Illuminate\Database\Seeder;

class FornecedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Jerriler Oliveira Ferreira & Cia LTDA',
            'nomeFantasia'  => 'Mercado Bom Churrasco',
            'cpfCnpj'       => '17.093.585/0001-34',
            'ieRg'          => '092/0025765',
            'email'         => 'contato@bomchurrasco.com.br',
            'cep'           => '96360-000',
            'logradouro'    => 'Av. Alberto Pasqualine',
            'numero'        => '99',
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Kelvin Ferreira Souza ME',
            'nomeFantasia'  => 'KFS Soluções',
            'cpfCnpj'       => '29.145.909/0001-10',
            'ieRg'          => '092/0025766',
            'email'         => 'kelvin@bomchurrasco.com.br',
            'cep'           => '96360-000',
            'logradouro'    => 'Av. Alberto Pasqualine',
            'numero'        => '99',
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pedro Osório',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Comercial Destro LTDA',
            'nomeFantasia'  => 'Destro Macro Atacado',
            'cpfCnpj'       => '76.062.488/0025-10',
            'ieRg'          => '086/0486680',
            'email'         => 'comercial@destro.com.br',
            'cep'           => '93352-000',
            'logradouro'    => 'Estrada Rs 239',
            'numero'        => '1000',
            'bairro'        => 'Roselândia',
            'estado'        => 'RS',
            'municipio'     => 'Novo Hamburgo',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Seara Alimentos Ltda',
            'nomeFantasia'  => 'Seara',
            'cpfCnpj'       => '02.914.460/0111-95',
            'ieRg'          => '382/0018729',
            'email'         => 'contato@seara.com.br',
            'cep'           => '92480-000',
            'logradouro'    => 'Rua Max Bloebow',
            'numero'        => '99',
            'bairro'        => 'Floresta',
            'estado'        => 'RS',
            'municipio'     => 'Nova Santa Rita',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Arita Dist Prod Alim Ltda',
            'nomeFantasia'  => 'Zezé',
            'cpfCnpj'       => '73.547.820/0001-71',
            'ieRg'          => '006/0031352',
            'email'         => 'contato@zeze.com.br',
            'cep'           => '96330-000',
            'logradouro'    => 'Rua Jose Bonifacio',
            'numero'        => '263',
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Arroio Grande',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Treichel Macromercado Ltda',
            'nomeFantasia'  => 'Treichel',
            'cpfCnpj'       => '03.204.565/0001-89',
            'ieRg'          => '093/0316452',
            'email'         => 'contato@treichel.com.br',
            'cep'           => '96360-000',
            'logradouro'    => 'Av. Fernando Osório',
            'numero'        => '4842',
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pelotas',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Nestle Brasil Ltda',
            'nomeFantasia'  => 'Nestlê',
            'cpfCnpj'       => '60.409.075/0183-61',
            'ieRg'          => '093/0425260',
            'email'         => 'contato@nestle.com.br',
            'cep'           => '96360-000',
            'logradouro'    => 'Av. Fernando Osório',
            'numero'        => '5573',
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pelotas',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Vanderlei Bierhals Me',
            'nomeFantasia'  => 'Gelei',
            'cpfCnpj'       => '97.021.182/0001-19',
            'ieRg'          => '093/0248031',
            'email'         => 'contato@gelei.com.br',
            'cep'           => '96070-000',
            'logradouro'    => 'Av. Fernando Osorio',
            'numero'        => '99',
            'bairro'        => 'Tres Vendas',
            'estado'        => 'RS',
            'municipio'     => 'Pelotas',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Vonpar Refrescos S.A',
            'nomeFantasia'  => 'Vonpar',
            'cpfCnpj'       => '91.235.549/0010-01',
            'ieRg'          => '093/0230493',
            'email'         => 'contato@vonpar.com.br',
            'cep'           => '96015-140',
            'logradouro'    => 'Av. Bento Gonçalves',
            'numero'        => '5730 ',
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Pelotas',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Souza Cruz Ltda',
            'nomeFantasia'  => 'Souza Cruz',
            'cpfCnpj'       => '33.009.911/0047-11',
            'ieRg'          => '177/0223689',
            'email'         => 'contato@souzacruz.com.br',
            'cep'           => '94970-470',
            'logradouro'    => 'Av. Frederico Augusto Ritter',
            'numero'        => '8000',
            'bairro'        => 'Distrito Industrial',
            'estado'        => 'RS',
            'municipio'     => 'Cachoeirinha',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Pepsico do Brasil Ltda',
            'nomeFantasia'  => 'Elma Chips',
            'cpfCnpj'       => '31.565.104/0104-82',
            'ieRg'          => '0920025765',
            'email'         => 'contato@pepsico.com.br',
            'cep'           => '96050-000',
            'logradouro'    => 'Rua Professor Paulo Zanotta da Cruz',
            'numero'        => '1148',
            'bairro'        => 'Fragata',
            'estado'        => 'RS',
            'municipio'     => 'Pelotas',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Unilever Brasil Gelados Ltda',
            'nomeFantasia'  => 'Kibon',
            'cpfCnpj'       => '11.806.723/0005-22',
            'ieRg'          => '043/0133030',
            'email'         => 'contato@kibon.com.br',
            'cep'           => '92480-000',
            'logradouro'    => 'Rua Max Bloedow',
            'numero'        => '241',
            'bairro'        => 'Centro',
            'estado'        => 'RS',
            'municipio'     => 'Nova Santa Rita',
        ]);
       
       DB::table('fornecedores')->insert([
            'razaoSocial'   => 'Parati S.A',
            'nomeFantasia'  => 'Parati',
            'cpfCnpj'       => '82.945.932/0001-71',
            'ieRg'          => '250/051877',
            'email'         => 'contato@parati.com.br',
            'cep'           => '89990-000',
            'logradouro'    => 'Rua Tiradentes ',
            'numero'        => '475',
            'bairro'        => 'São Francisco',
            'estado'        => 'SC',
            'municipio'     => 'São Lourenço do Oeste',
        ]);
    }
}
