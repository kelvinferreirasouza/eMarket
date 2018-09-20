<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {	
            $table->increments('id');
            $table->string('razaoSocial', 150);
            $table->string('nomeFantasia', 100);
            $table->string('cnpj', 18);
            $table->string('ie', 11);
            $table->string('cep', 9);
            $table->string('lagradouro', 100);
            $table->integer('numero');
            $table->string('complemento', 50);
            $table->string('bairro', 100);
            $table->string('estado', 100);
            $table->string('municipio', 100);
            $table->string('fone', 15);
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
        Schema::drop('empresas');
    }
}
