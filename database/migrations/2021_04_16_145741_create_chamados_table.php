<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('chamados', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('vendedor_id');             
             $table->text('assunto');
             $table->longText('descricao');
             $table->date('data_criacao_chamado');
             $table->enum('status', ['aberto', 'andamento', 'resolvido', 'atrasado']);
             $table->timestamps();
             
             $table->foreign('vendedor_id')->references('id')->on('vendedors');
        });
        //   Schema::table('chamados', function(Blueprint $table){
        //       $table->foreign('vendedor_id')->references('id')->on('vendedors');
        //   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}
