<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //
    protected $table = 'participantes';

    public function actividad(){
        return $this->belongsTo(Project::class , 'ID_Actividad');
    }
}
