<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioTableSeeder::class);
        $this->call(SetorTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(UnidadeTableSeeder::class);
    }
}
