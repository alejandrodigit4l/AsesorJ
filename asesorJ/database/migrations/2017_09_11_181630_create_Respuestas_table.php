<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario');//creador de la respuesta
            $table->string('email');//email de creador de la respuesta
            $table->string('push_token'); //push token de creador de la respuesta
            $table->integer('categoria'); //id categoria del creador de la respuesta
            $table->text('cuerpo');//respuesta
            $table->integer('pregunta'); //pregunta que se responde
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
        Schema::dropIfExists('Respuestas');
    }
}
