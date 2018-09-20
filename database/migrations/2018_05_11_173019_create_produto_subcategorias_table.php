<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoSubcategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtosubcategorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('produtoCategoriaId')->unsigned();
            $table->foreign('produtoCategoriaId')->references('id')->on('produtocategorias');
            $table->integer('isAtivo');
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
        Schema::drop('produtosubcategorias');
    }
}
