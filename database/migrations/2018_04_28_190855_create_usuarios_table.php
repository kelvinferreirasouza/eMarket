<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('login', 100)->unique();
            $table->string('email', 100)->unique();
            $table->string('senha');
            $table->string('cpf', 14)->unique();
            $table->string('rg')->nullable();
            $table->integer('sexo');
            $table->date('dataNasc');
            $table->integer('cargoId')->unsigned()->default(3);
            $table->foreign('cargoId')->references('id')->on('usuariocargos');
            $table->string('cep', 9)->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('municipio', 100)->nullable();
            $table->string('fone')->nullable();
            $table->string('celular')->nullable();
            $table->string('foto')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->integer('isAtivo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('usuarios');
    }

}
