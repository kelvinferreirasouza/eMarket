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
            $table->decimal('total', 20, 2)->default(0.00);
            $table->decimal('frete', 20, 2)->default(0.00);
            $table->date('data');
            $table->enum('status', [1,2,3]);
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
        Schema::drop('vendas');
    }
}
