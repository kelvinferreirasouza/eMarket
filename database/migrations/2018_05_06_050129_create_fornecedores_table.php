<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razaoSocial', 100);  
            $table->string('nomeFantasia', 100);  
            $table->string('cnpj', 20)->unique();
            $table->string('ie')->nullable();          
            $table->string('email', 100);
            $table->string('cep', 9)->nullable();
            $table->string('lagradouro', 100)->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('municipio', 100)->nullable();
            $table->string('fone')->nullable();
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
        
    }
}
