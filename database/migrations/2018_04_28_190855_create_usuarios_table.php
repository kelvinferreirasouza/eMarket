<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('login', 100);
            $table->string('email', 100);
            $table->string('senha');
            $table->string('cpf', 14);
            $table->string('rg')->nullable();
            $table->string('sexo', 9);
            $table->date('dataNasc');
            $table->string('cep', 9)->nullable();
            $table->string('lagradouro', 100)->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('municipio', 100)->nullable();
            $table->string('pais', 100)->nullable();
            $table->string('fone')->nullable();
            $table->string('tipoUsuario')->default('Cliente');
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
        
    }
}