<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestasJefe extends Model
{
    //
    protected $table = 'respuestas_jefe';
    protected $fillable = [
        'ID_Actividad',
        'RPE_Empleado',
        'Pregunta_1',
        'Pregunta_2',
        'Pregunta_3',
        'Comentarios',
    ];
}
