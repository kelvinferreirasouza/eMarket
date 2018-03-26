<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFormaPagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formapagamento', function (Blueprint $table) {	
            $table->increments('formaPagamentoId');
            $table->string('formaPagamento', 100);
            $table->integer('empresaId')->unsigned();
            $table->foreign('empresaId')->references('empresaId')->on('empresa');
            $table->date('dataCadastro');
            $table->time('horaCadastro');
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
