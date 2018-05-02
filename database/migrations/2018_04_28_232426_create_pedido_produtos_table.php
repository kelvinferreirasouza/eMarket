<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoprodutos', function (Blueprint $table) {	
            $table->increments('pedidoProdutoId');
            $table->integer('produto_Id')->unsigned();
            $table->foreign('produto_Id')->references('id')->on('produtos');
            $table->decimal('qtd', 12, 3)->default(0.000);
            $table->decimal('valor', 12, 2)->default(0.00);
            $table->decimal('valorDesconto', 12, 2)->default(0.00);
            $table->decimal('valorAcrescimo', 12, 2)->default(0.00);
            $table->decimal('valorTotal', 12, 2)->default(0.00);
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
