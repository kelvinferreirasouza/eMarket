<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {	
            $table->increments('pessoaId');
            $table->string('nomeRazaoSocial');
            $table->string('nomeFantasia');
            $table->string('cpfCnpj');
            $table->string('rgIe');
            $table->string('dataNasc');
            $table->integer('sexoId')->unsigned();
            $table->foreign('sexoId')->references('sexoId')->on('sexo');
            $table->string('cep');
            $table->string('lagradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('estado');
            $table->string('municipio');
            $table->string('pais');
            $table->string('fone');
            $table->string('celular');
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
