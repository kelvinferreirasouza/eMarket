<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {	
            $table->increments('usrId');
            $table->integer('pessoaId')->unsigned();
            $table->foreign('pessoaId')->references('pessoaId')->on('pessoa');
            $table->string('usrEmail', 100);
            $table->string('usrPassword', 100);
            $table->date('dataCadastro');
            $table->time('horaCadastro');
            $table->date('dataUltimaCompra');
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
