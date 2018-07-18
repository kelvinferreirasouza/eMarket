<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedidoId')->unsigned();
            $table->foreign('pedidoId')->references('id')->on('pedidos');
            $table->decimal('valorPedido', 20, 2)->default(0.00)->nullable();
            $table->decimal('valorFrete', 20, 2)->default(0.00)->nullable();
            $table->integer('isCancelado')->default(0);
            $table->integer('isConfirmado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
