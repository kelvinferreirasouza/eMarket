<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {	
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->string('referencia',191)->unique();
            $table->string('codigo',191)->unique();
            $table->decimal('total', 10, 2)->default(0.00);
            $table->decimal('frete', 10, 2)->default(0.00);
            $table->decimal('subtotal', 10, 2)->default(0.00);
            $table->enum('status', [1,2,3,4,5,6,7,8,9]);
            $table->enum('metodo_pagamento', [1,2,3,4,5,6,7]);
            $table->date('data');
            $table->date('data_refresh_status')->nullable();
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
        Schema::drop('pedidos');
    }
}
