<?php

namespace App\Http\Controllers;

use App\Correo;
use App\empleado;
use App\Mail\JefeRecieved;
use App\Mail\MessajeRecieved;
use App\Models\Area;
use App\Participante;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    // Envio de Correo de Reaccion y PArticipantes
    public function store(Request $request){

        $participantes_all = [];
        $links = $request->input('link');
        $id_curso = $request->input('id_curso');
        $curso = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();
        // $participantes = Participante::where('ID_Actividad', 18224)->get();
        $participantes = Participante::where('ID_Actividad', $id_curso)->get();
        foreach ($participantes as $key => $participante_id) {
            # code...
            array_push($participantes_all, $participante_id->ID_Empleado);
        }
        $empleados = empleado::whereIn('ID_Empleado', $participantes_all)->pluck('RPE_Empleado');

        //Envio de correos
        $remitentes = Correo::whereIn('rpe', $empleados)->pluck('correo');

        //ver que participantes no se encuentra su correo
        $correos_no = [];
        foreach ($empleados as $key => $value) {

            // echo $value;
            if(Correo::where('rpe', $value)->exists()){

            }else{

                // $empleado = empleado::where('RPE_Empleado', $value)->witch('Nombre_Empleado' , 'ApellidoP_E', 'ApellidoM_E');
                $empleado = empleado::where('RPE_Empleado', $value)->select('Nombre_Empleado' , 'ApellidoP_E', 'ApellidoM_E')
                ->first();
                array_push($correos_no , $empleado );
            }
        }

        Mail::to($remitentes)->send(new MessajeRecieved($links,$curso));

        return  $correos_no;
    }

    //Envio de Correo Para los jefes inmediatos

    public function JefeEmail(Request $request){


        $participantes_all = [];
        //Se obtiene el link de la encuesta y el id del curso
        $links = $request->input('link');
        $id_curso = $request->input('id_curso');


        //Se busca el nombre del curso
        $curso = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();

        // Se buscan los participantes del curso
        $participantes = Participante::where('ID_Actividad', $id_curso)->get();
        foreach ($participantes as $key => $participante_id) {
            # code...
            array_push($participantes_all, $participante_id->ID_Empleado);
        }

        // dd($participantes_all);
        $empleados = empleado::whereIn('ID_Empleado', $participantes_all)->get();
        $empleados_area = empleado::whereIn('ID_Empleado', $participantes_all)->pluck('Clave_Area');
        $areas = Area::whereIn('Clave_Area' , $empleados_area)->get();
        // dd($areas);

        Mail::to('manuel.pp2209@gmail.com')->send(new JefeRecieved($links,$curso,$empleados,$areas));
    }


}
