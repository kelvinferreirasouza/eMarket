<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {	
            $table->increments('id', 10);
            $table->string('codBarras', 50);
            $table->string('produtoNome', 100);
            $table->decimal('qtd', 20, 3)->default(0.000);
            $table->decimal('qtdMin', 20, 3)->default(0.000)->nullable();
            $table->decimal('precoCusto', 20, 2)->default(0.00)->nullable();
            $table->decimal('precoVenda', 20, 2)->default(0.00);
            $table->decimal('margemLucro', 20, 2)->default(0.00)->nullable();
            $table->integer('produtoSetorId');
            $table->integer('produtoCategoriaId');
            $table->integer('produtoMarcaId');
            $table->integer('produtoUnidadeId');
            $table->timestamps();
            $table->integer('isPromocao')->default(0);
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
