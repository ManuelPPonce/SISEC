<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Se accede a la tabla de actividad
    protected $table = 'actividad';

    public function participantes(){

        return $this->hasMany(Participante::class , 'ID_Actividad');
    }
}
