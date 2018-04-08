<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEntregaPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregapedidos', function (Blueprint $table) {	
            $table->increments('entregaPedidoId');
            $table->integer('freteId')->unsigned();
            $table->foreign('freteId')->references('freteId')->on('fretes');
            $table->integer('funcId')->unsigned();
            $table->foreign('funcId')->references('funcId')->on('funcionarios');
            $table->integer('veiculoId')->unsigned();
            $table->foreign('veiculoId')->references('veiculoId')->on('veiculos');
            $table->integer('pedidoId')->unsigned();
            $table->foreign('pedidoId')->references('pedidoId')->on('pedidos');
            $table->date('dataSaida');
            $table->time('horaSaida');
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
