<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('time_casa');
            $table->integer('time_fora');
            $table->time('horario_inicio');
            $table->time('horario_termino');
            $table->string('placar');
            $table->integer('cartao_amarelo');
            $table->integer('cartao_vermelho');
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
        Schema::dropIfExists('partidas');
    }
}
