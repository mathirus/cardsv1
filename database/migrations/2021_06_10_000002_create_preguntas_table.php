<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedBigInteger('mazo_id');
            $table->string('pregunta');
            $table->string('respuesta');
            $table->unsignedBigInteger('estado_id')->default(1);
            $table->timestamps();
            $table->foreign('mazo_id')->references('id')->on('mazos');
            $table->foreign('estado_id')->references('id')->on('estados_preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
