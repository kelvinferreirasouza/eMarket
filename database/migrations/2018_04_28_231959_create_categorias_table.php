<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtocategorias', function (Blueprint $table) {	
            $table->increments('produtoCategoriaId');
            $table->string('produtoCategoria');
            $table->integer('produto_setor_id')->unsigned();
            $table->foreign('produto_setor_id')->references('id')->on('produtoSetores');
            $table->timestamps();
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
