<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_itens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade');
            // vinculo de servico ao pedido_itens
            $table->integer('servico_id')->unsigned();
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->decimal('preco', 10, 2)->default(0);
            // vinculo de parceiro ao pedido
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('parceiros');
            $table->integer('quantidade_entregue');
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
        Schema::dropIfExists('pedido_itens');
    }
}
