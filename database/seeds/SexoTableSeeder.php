<?php

use Illuminate\Database\Seeder;

class SexoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexos')->insert([
            'sexo' => 'Masculino',
            'isAtivo' => 1
        ]);

        DB::table('sexos')->insert([
            'sexo' => 'Feminino',
            'isAtivo' => 1
        ]);

        DB::table('sexos')->insert([
            'sexo' => 'Outro',
            'isAtivo' => 1
        ]);
    }
}
