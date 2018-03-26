<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtocategoria', function (Blueprint $table) {	
            $table->increments('produtoCategoriaId');
            $table->string('produtoCategoria');
            $table->integer('produtoSetorId')->unsigned();
            $table->foreign('produtoSetorId')->references('produtoSetorId')->on('produtoSetor');
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
