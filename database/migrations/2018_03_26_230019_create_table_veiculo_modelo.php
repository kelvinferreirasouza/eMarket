<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVeiculoModelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculomodelo', function (Blueprint $table) {	
            $table->increments('veiculoModeloId');
            $table->string('veiculoModelo', 100);
            $table->integer('veiculoMarcaId')->unsigned();
            $table->foreign('veiculoMarcaId')->references('veiculoMarcaId')->on('veiculomarca');
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
