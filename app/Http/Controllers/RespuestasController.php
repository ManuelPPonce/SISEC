<?php

namespace App\Http\Controllers;

use App\empleado;
use App\Models\Area;
use App\Participante;
use App\RespuestasJefe;
use App\Project;
use App\ListInstructor;
use App\instructor;
use App\RespuestasReaccion;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    //

    public function subir(Request $request)
    {
        $rpe_empleado = $request->input('rpe');
        $empleado_id =  empleado::where('RPE_Empleado', $rpe_empleado)->pluck('ID_Empleado');
        $participante = Participante::where('ID_Actividad', $request->input('curso'))->where('ID_Empleado', $empleado_id)->exists();

        $empleado = empleado::where('RPE_Empleado', $rpe_empleado)->exists();
        if ($participante) {
            if (RespuestasReaccion::where('ID_Actividad', $request->input('curso'))->where('RPE_Empleado', $rpe_empleado)->exists()) {
                return view('validacion.existente');
            } else {
                $respuestas =  RespuestasReaccion::create(
                    [
                        'ID_Actividad' => $request['curso'],
                        'RPE_Empleado' => $request['rpe'],
                        'Pregunta_1' => $request['pregunta-1'],
                        'Pregunta_2' => $request['pregunta-2'],
                        'Pregunta_3' => $request['pregunta-3'],
                        'Pregunta_4' => $request['pregunta-4'],
                        'Pregunta_5' => $request['pregunta-5'],
                        'Pregunta_6' => $request['pregunta-6'],
                        'Pregunta_7' => $request['pregunta-7'],
                        'Pregunta_8' => $request['pregunta-8'],
                        'Pregunta_9' => $request['pregunta-9'],
                        'Pregunta_10' => $request['1-pregunta-1'],
                        'Pregunta_11' => $request['1-pregunta-2'],
                        'Pregunta_12' => $request['1-pregunta-3'],
                        'Pregunta_13' => $request['1-pregunta-4'],
                        'Pregunta_14' => $request['1-pregunta-5'],
                        'Pregunta_15' => $request['1-pregunta-6'],
                        'Pregunta_16' => $request['2-pregunta-1'],
                        'Pregunta_17' => $request['2-pregunta-2'],
                        'Pregunta_18' => $request['2-pregunta-3'],
                        'Pregunta_19' => $request['2-pregunta-4'],
                        'Observaciones' => $request['observaciones'],
                        'Pregunta_20' => $request['opcion-1'],
                        'Pregunta_21' => $request['opcion-2'],
                        'Actividad_Mejorar' => $request['comentario'],
                    ]
                );
                return view('validacion.aceptado');
            }
        } else {
            return view('validacion.denegado');
        }
    }

    public function datos(Request $request)
    {
        $rpe =  $request->input('rpe');
        $empleados = empleado::where('RPE_Empleado', $rpe)->get();
        return response(json_encode($empleados), 200)->header('Content-type', 'text/plain');
    }
    public function jefe(Request $request)
    {
        // dd($request);
        $rpe_empleado = $request->input('rpe');
        $empleado = empleado::where('RPE_Empleado', $rpe_empleado)->exists();
        if ($empleado) {
            if (RespuestasJefe::where('ID_Actividad', $request->input('curso'))->where('RPE_Empleado', $rpe_empleado)->exists()) {
                return view('validacion.existente');
            } else {
                $respuestas =  RespuestasJefe::create(
                    [
                        'ID_Actividad' => $request['curso'],
                        'RPE_Empleado' => $request['rpe'],
                        'Pregunta_1' => $request['opcion-1'],
                        'Pregunta_2' => $request['opcion-2'],
                        'Pregunta_3' => $request['pregunta-3'],
                        'Comentarios' => $request['comentarios'],
                    ]
                );
                return view('validacion.aceptado');
            }
        } else {
            return view('validacion.denegado');
        }
    }
    public function departamento(Request $request)
    {
        $area =  $request->input('area');
        $Area = Area::where('Clave_Area', $area)->get();
        return response(json_encode($Area), 200)->header('Content-type', 'text/plain');
    }

    public function datosReaccion($id_curso)
    {

        $curso_name = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();
        $fecha_inicio = Project::where('ID_Actividad', $id_curso)->pluck('Fecha_Inicio')->first();
        $fecha_final = Project::where('ID_Actividad', $id_curso)->pluck('Fecha_Termino')->first();
        $hora_inicio = Project::where('ID_Actividad', $id_curso)->pluck('Hora_Inicio')->first();
        $hora_final = Project::where('ID_Actividad', $id_curso)->pluck('Hora_Final')->first();
        $total_horas = Project::where('ID_Actividad', $id_curso)->pluck('Total_Horas')->first();
        $id_instructor = ListInstructor::where('ID_Actividad', $id_curso)->pluck('ID_Instructor')->first();
        $instructor = instructor::where('ID_Instructor', $id_instructor)->select('Nombre_Instructor', 'ApellidoP_I', 'ApellidoM_I')->first();
        // dd($id_instructor);
        return view('evaluaciones.reaccion', compact('id_curso', 'curso_name', 'fecha_inicio', 'fecha_final', 'hora_inicio', 'hora_final', 'total_horas', 'instructor'));
    }

    public function datosJefe($id_curso){
        $curso_name = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();
        return view('evaluaciones.jefe', compact('curso_name'));
    }

    public function encuestas($id_curso){
        return view('encuestas.Respuestas');
    }

}
