<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');//creador de la pregunta
            $table->string('email');//email de creador de la pregunta
            $table->string('push_token'); //push token de creador de la pregunta
            $table->string('titulo'); //titulo de la pregunta
            $table->text('cuerpo'); //cuerpo de la pregunta
            $table->integer('categoria'); //id categoria
            $table->string('estado'); //estado de la pregunta, resuelta, no contestada, contestada se recomienda tener un JSON {estado: ,cantidad:}
            $table->integer('cantidad');
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
        Schema::dropIfExists('Preguntas');
    }
}
