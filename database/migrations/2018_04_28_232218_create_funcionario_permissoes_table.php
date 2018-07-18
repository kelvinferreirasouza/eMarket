<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioPermissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionariopermissoes', function (Blueprint $table) {	
            $table->increments('id');
            $table->integer('funcCargoId')->unsigned();
            $table->foreign('funcCargoId')->references('id')->on('usuariocargos');
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
