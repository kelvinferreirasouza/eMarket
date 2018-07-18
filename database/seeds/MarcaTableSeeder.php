<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtomarcas')->insert([
            'nome'    => 'NESTLÊ',
            'isAtivo' => 1
        ]);

        DB::table('produtomarcas')->insert([
            'nome'    => 'DANBY',
            'isAtivo' => 1
        ]);

        DB::table('produtomarcas')->insert([
            'nome'    => 'PARATI',
            'isAtivo' => 1
        ]);
    }
}
