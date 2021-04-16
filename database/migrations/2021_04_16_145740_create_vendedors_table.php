<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chamados_id');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->enum('status', ['ativo', 'inativo']);
            $table->integer('qtd_chamados_aberto');
            $table->integer('qtd_chamados_andamento');
            $table->integer('qtd_chamados_resolvido');
            $table->timestamps();
        });
        Schema::table('vendedors', function(Blueprint $table){
            $table->foreign('chamados_id')->references('id')->on('chamados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendedors');
    }
}
