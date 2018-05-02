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
            $table->increments('veiculoId');
            $table->integer('veiculoMarcaId')->unsigned();
            $table->foreign('veiculoMarcaId')->references('veiculoMarcaId')->on('veiculomarcas');
            $table->integer('veiculoModeloId')->unsigned();
            $table->foreign('veiculoModeloId')->references('veiculoModeloId')->on('veiculomodelos');
            $table->string('veiculoAno', 4);
            $table->string('veiculoPlaca', 8);
            $table->string('veiculoRenavam', 20);
            $table->string('veiculoCor', 50);
            $table->string('quilometragem', 50);
            $table->date('ultimaRevisao');
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
