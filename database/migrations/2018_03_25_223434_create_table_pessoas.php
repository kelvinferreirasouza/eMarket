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
            $table->string('password', 100);
            $table->date('dataNasc');
            $table->string('sexo', 100)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('lagradouro', 100)->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('municipio', 100)->nullable();
            $table->string('pais', 100)->nullable();
            $table->string('fone', 15)->nullable();
            $table->string('celular', 15)->nullable();
            $table->integer('isAtivo')->default(1);
            $table->rememberToken();
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
        //
    }
}
