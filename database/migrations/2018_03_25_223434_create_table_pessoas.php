<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {	
            $table->increments('pessoaId');
            $table->string('nomeRazaoSocial', 150);
            $table->string('nomeFantasia', 100)->nullable();
            $table->string('cpfCnpj', 20);
            $table->integer('rgIe')->nullable();
            $table->string('email', 100);
            $table->date('dataNasc');
            $table->integer('sexoId')->unsigned();
            $table->foreign('sexoId')->references('sexoId')->on('sexos');
            $table->string('cep', 9);
            $table->string('lagradouro', 100);
            $table->integer('numero');
            $table->string('bairro', 100);
            $table->string('estado', 100);
            $table->string('municipio', 100);
            $table->string('pais', 100);
            $table->string('fone', 15)->nullable();
            $table->string('celular', 15);
            $table->date('dataCadastro');
            $table->time('horaCadastro');
            $table->integer('isAtivo')->default(1);
            $table->rememberToken();
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
