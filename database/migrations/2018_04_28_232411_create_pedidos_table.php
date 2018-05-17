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
            $table->integer('empresaId')->unsigned();
            $table->foreign('empresaId')->references('id')->on('empresas');
            $table->decimal('totalProdutos', 12, 2)->default(0.00);
            $table->decimal('valorFrete', 12, 2)->default(0.00);
            $table->decimal('valorDesconto', 12, 2)->default(0.00);
            $table->decimal('valorAcrescimo', 12, 2)->default(0.00);
            $table->decimal('totalPedido', 12, 2)->default(0.00);
            $table->integer('freteId')->unsigned();
            $table->foreign('freteId')->references('id')->on('fretes');
            $table->integer('formaPagamentoId')->unsigned();
            $table->foreign('formaPagamentoId')->references('id')->on('formapagamentos');
            $table->date('dataEmissao');
            $table->time('horaEmissao');
            $table->integer('isCancelado')->default(0);
            $table->integer('pagConfirmado')->default(0);
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
