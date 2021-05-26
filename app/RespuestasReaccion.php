<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestasReaccion extends Model
{
    //
    protected $table = 'respuestas_reaccion';
    protected $fillable = [
        'ID_Actividad',
        'RPE_Empleado',
        'Pregunta_1',
        'Pregunta_2',
        'Pregunta_3',
        'Pregunta_4',
        'Pregunta_5',
        'Pregunta_6',
        'Pregunta_7',
        'Pregunta_8',
        'Pregunta_9',
        'Pregunta_10',
        'Pregunta_11',
        'Pregunta_12',
        'Pregunta_13',
        'Pregunta_14',
        'Pregunta_15',
        'Pregunta_16',
        'Pregunta_17',
        'Pregunta_18',
        'Pregunta_19',
        'Observaciones',
        'Pregunta_20',
        'Pregunta_21',
        'Actividad_Mejorar',
    ];
}
