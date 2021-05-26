<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasJefe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_jefe', function (Blueprint $table) {
            $table->bigIncrements('id_respuesta_jefe');
            $table->integer('ID_Actividad');
            $table->string('RPE_Empleado');
            $table->string('Pregunta_1');
            $table->string('Pregunta_2');
            $table->string('Pregunta_3');
            $table->string('Comentarios');
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
        Schema::dropIfExists('respuestas_jefe');
    }
}
