<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {	
            $table->increments('id');
            $table->integer('veiculoMarcaId')->unsigned();
            $table->foreign('veiculoMarcaId')->references('id')->on('veiculomarcas');
            $table->integer('veiculoModeloId')->unsigned();
            $table->foreign('veiculoModeloId')->references('id')->on('veiculomodelos');
            $table->string('ano', 4);
            $table->string('placa', 8);
            $table->string('renavam', 20);
            $table->string('cor', 50);
            $table->timestamps();
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
