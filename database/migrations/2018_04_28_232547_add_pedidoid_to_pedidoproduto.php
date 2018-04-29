<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPedidoidToPedidoproduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidoprodutos', function (Blueprint $table) {
            $table->integer('pedidoId')->unsigned()->after('pedidoProdutoId');

            $table->foreign('pedidoId')
                    ->references('pedidoId')->on('pedidos')
                    ->onDelete('cascade');
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