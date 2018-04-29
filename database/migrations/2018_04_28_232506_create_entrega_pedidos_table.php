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
            $table->increments('entregaPedidoId');
            $table->integer('freteId')->unsigned();
            $table->foreign('freteId')->references('freteId')->on('fretes');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
