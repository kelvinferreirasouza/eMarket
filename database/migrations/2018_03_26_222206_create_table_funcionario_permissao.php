<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncionarioPermissao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionariopermissao', function (Blueprint $table) {	
            $table->increments('funcPermissaoId');
            $table->integer('funcCargoId')->unsigned();
            $table->foreign('funcCargoId')->references('funcCargoId')->on('funcionarioCargo');
            $table->integer('moduloId')->unsigned();
            $table->foreign('moduloId')->references('moduloId')->on('moduloacesso');
            $table->integer('consultar')->default(0);
            $table->integer('atualizar')->default(0);
            $table->integer('incluir')->default(0);
            $table->integer('excluir')->default(0);
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
