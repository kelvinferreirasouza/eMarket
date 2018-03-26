<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {	
            $table->increments('produtoId', 10);
            $table->string('codBarras', 50);
            $table->string('produtoNome', 100);
            $table->decimal('qtd', 20, 3)->default(0.000);
            $table->decimal('qtdMin', 20, 3)->default(0.000)->nullable();
            $table->decimal('precoCusto', 20, 2)->default(0.00)->nullable();
            $table->decimal('precoVenda', 20, 2)->default(0.00);
            $table->decimal('margemLucro', 20, 2)->default(0.00)->nullable();
            $table->integer('produtoSetorId')->unsigned();
            $table->foreign('produtoSetorId')->references('produtoSetorId')->on('produtoSetor');
            $table->integer('produtoCategoriaId')->unsigned();
            $table->foreign('produtoCategoriaId')->references('produtoCategoriaId')->on('produtoCategoria');
            $table->integer('produtoMarcaId')->unsigned()->nullable();
            $table->foreign('produtoMarcaId')->references('produtoMarcaId')->on('produtoMarca');
            $table->integer('produtoUnidadeId')->unsigned();
            $table->foreign('produtoUnidadeId')->references('produtoUnidadeId')->on('produtoUnidade');
            $table->date('dataCadastro');
            $table->time('horaCadastro');
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
