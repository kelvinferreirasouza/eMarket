<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {	
            $table->increments('funcId');
            $table->integer('pessoaId')->unsigned();
            $table->foreign('pessoaId')->references('pessoaId')->on('pessoas');
            $table->string('funcPassword', 150);
            $table->integer('funcCargoId')->unsigned();
            $table->foreign('funcCargoId')->references('funcCargoId')->on('funcionarioCargos');
            $table->decimal('funcSalario', 20, 3);
            $table->integer('empresaId')->unsigned();
            $table->foreign('empresaId')->references('empresaId')->on('empresas');
            $table->date('dataAdmissao');
            $table->date('dataDemissao');
            $table->date('dataCadastro');
            $table->time('horaCadastro');
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
