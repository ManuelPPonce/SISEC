<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasReaccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_reaccion', function (Blueprint $table) {
            $table->bigIncrements('id_respuesta');
            $table->integer('ID_Actividad');
            $table->string('RPE_Empleado');
            $table->string('Pregunta_1');
            $table->string('Pregunta_2');
            $table->string('Pregunta_3');
            $table->string('Pregunta_4');
            $table->string('Pregunta_5');
            $table->string('Pregunta_6');
            $table->string('Pregunta_7');
            $table->string('Pregunta_8');
            $table->string('Pregunta_9');
            $table->string('Pregunta_10');
            $table->string('Pregunta_11');
            $table->string('Pregunta_12');
            $table->string('Pregunta_13');
            $table->string('Pregunta_14');
            $table->string('Pregunta_15');
            $table->string('Pregunta_16');
            $table->string('Pregunta_17');
            $table->string('Pregunta_18');
            $table->string('Pregunta_19');
            $table->string('Observaciones');
            $table->string('Pregunta_20');
            $table->string('Pregunta_21');
            $table->string('Actividad_Mejorar');

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
        Schema::dropIfExists('respuestas_reaccion');
    }
}
