<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            // define a validade do servico (12,18,24,36 meses)
            $table->string('validade');
            $table->enum('tipo', ['pessoa_fisica', 'pessoa_juridica']);
            // campo responsavel por definir se o usuario esta ativo ou não (1: ativo , 0: inativo)
            $table->integer('ativo');
            // vinculo de usuario ao servico
            $table->integer('usuario_id')->unsigned();
            // vinculo de produto ao servico
            $table->integer('produto_id')->unsigned();
            // vinculo de usuario ao servico
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('servicos');
    }
}
