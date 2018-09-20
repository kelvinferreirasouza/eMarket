<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregaPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregapedidos', function (Blueprint $table) {	
            $table->increments('id');
            $table->integer('freteId')->unsigned();
            $table->foreign('freteId')->references('id')->on('fretes');
            $table->integer('usuarioId')->unsigned();
            $table->foreign('usuarioId')->references('id')->on('usuarios');
            $table->integer('veiculoId')->unsigned();
            $table->foreign('veiculoId')->references('id')->on('veiculos');
            $table->integer('pedidoId')->unsigned();
            $table->foreign('pedidoId')->references('id')->on('pedidos');
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
        Schema::drop('entregapedidos');
    }
}
