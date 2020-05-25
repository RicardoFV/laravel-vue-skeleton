<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parceiros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('localidade');
            $table->string('uf');
            $table->string('ibge');
            $table->string('email');
            $table->string('telefone');
            $table->string('celular');
            $table->enum('tipo_pessoa', ['fisica', 'juridica']);
            $table->enum('tipo_parceiro', ['cliente', 'fornecedor', 'cliente_fornecedor']);
            // nesse tipo documento sera armazenado (CPF ou CNPJ)
            $table->string('tipo_documento');
            // campo responsavel por definir se o usuario esta ativo ou não (1: ativo , 0: inativo)
            $table->integer('ativo');
            // vinculo de usuario ao parceiro
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('parceiros');
    }
}
