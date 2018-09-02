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
            $table->string('codBarras', 50)->unique;
            $table->string('produtoNome', 100);
            $table->decimal('qtd', 20, 3)->default(0.000);
            $table->decimal('qtdMin', 20, 3)->default(0.000)->nullable();
            $table->decimal('precoCusto', 20, 2)->default(0.00)->nullable();
            $table->decimal('precoVenda', 20, 2)->default(0.00);
            $table->decimal('margemLucro', 20, 2)->default(0.00)->nullable();
            $table->integer('produtoSetorId')->nullable()->unsigned()->onDelete('cascade');
            $table->foreign('produtoSetorId')->references('id')->on('produtosetores')->onDelete('cascade');
            $table->integer('produtoCategoriaId')->nullable()->unsigned()->onDelete('cascade');
            $table->foreign('produtoCategoriaId')->references('id')->on('produtocategorias')->onDelete('cascade');
            $table->integer('produtoMarcaId')->nullable()->unsigned()->onDelete('cascade');
            $table->foreign('produtoMarcaId')->references('id')->on('produtomarcas')->onDelete('cascade');
            $table->integer('produtoUnidadeId')->nullable()->unsigned()->onDelete('cascade');
            $table->foreign('produtoUnidadeId')->references('id')->on('produtounidades')->onDelete('cascade');
            $table->string('imagem1')->nullable();
            $table->string('imagem2')->nullable();
            $table->string('imagem3')->nullable();
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
