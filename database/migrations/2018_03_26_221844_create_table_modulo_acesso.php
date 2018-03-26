<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableModuloAcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduloacesso', function (Blueprint $table) {	
            $table->increments('moduloId');
            $table->string('moduloNome', 100);
            $table->string('moduloDescricao', 150)->nullable();
            $table->date('dataCadastro');
            $table->time('horaCadastro');
            $table->integer('isAtivo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
