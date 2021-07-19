<?php

namespace App\Http\Controllers;

use App\empleado;
use App\Models\Area;
use App\Models\usuarios;
use App\Participante;
use App\Project;
use App\RespuestasJefe;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class EncuestasController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    /**
     * Display a listing of the resource.
     *
     public function __construct()
     {
         $this->middleware('auth');
     }
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $anios = ['2019', '2020', '2021'];
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        setlocale(LC_ALL, 'es_ES');

        $anio_actual = date('Y');
        $mes_actual = date('n');

        // $indice = array_search($anio_actual, $anios, false);

        // if ($indice == false) {
        //     array_push($anios, $anio_actual);
        // }
        $clave_zona = Auth::user()->name;
        // dd($clave_zona);
        $zona = Area::where('Clave_Zona', $clave_zona)->pluck('ID_Area');


        // dd($zona);

        // $mes = $request->get('#id_mes');

        $anio_actual = $request->input('id_anio');
        $mes_actual = $request->input('id_mes');

        // dd($mes_actual);
        $cursos = Project::where('Anio_Curso', $anio_actual)->whereMonth('Fecha_Inicio', $mes_actual)->whereIn('ID_Area', $zona)->get();
        // $cursos = Project::where('Anio_Curso', $anio_actual)->whereMonth('Fecha_Inicio', $mes_actual)->get();
        // dd($request->all());
        $participantes_all = [];

        $participantes = Participante::where('ID_Actividad', 16440)->get();
        // dd($participantes);
        foreach ($participantes as $key => $participante_id) {
            # code...
            array_push($participantes_all, $participante_id->ID_Empleado);
        }
        $empleados = empleado::whereIn('ID_Empleado', $participantes_all)->get();
        // dd($empleados);
        // dd($participantes_all);
        // return view('cursos' , compact('participantes'));
        $RespuestasJefe = RespuestasJefe::all();
        return view('cursos', compact('cursos', 'participantes', 'empleados', 'anio_actual', 'mes_actual', 'RespuestasJefe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function participantes(Request $request)
    {
        $participantes_all = [];
        if ($request->isMethod('GET')) {
            $nombre = $request->input("ID_Actividad");
            // var_dump($nombre);
        }
        $participantes = Participante::where('ID_Actividad', $nombre)->get();
        foreach ($participantes as $key => $participante_id) {
            # code...
            array_push($participantes_all, $participante_id->ID_Empleado);
        }
        $empleados = empleado::whereIn('ID_Empleado', $participantes_all)->get();


        return response(json_encode($empleados), 200)->header('Content-type', 'text/plain');
    }
    public function eliminarParticipante(Request $request)
    {
        // delete
        if ($request->isMethod('GET')) {
            $curso_id = $request->input("id_curso");
            $id_participante = $request->input("id_empleado");
            // var_dump($nombre);
        }
        // $articulo->delete();
        $participante = Participante::where('ID_Actividad', $curso_id)->where('ID_Empleado', $id_participante)->delete();
        // return response()->json([
        //     'message' => 'Articulo Eliminado'
        // ]);
    }
    public function login()
    {

        return view('inicio');
    }
    public function inicioSesion(Request $request)
    {
    }

    public function envjefe(Request $request)
    {
       $curso_id =  $request->input('id_curso');
       $curso = Project::find($curso_id);
       $curso->Jefe_Not = 1 ;
       $curso->save();
       return response(json_encode($curso), 200)->header('Content-type', 'text/plain');
    }
    public function envreac(Request $request)
    {
       $curso_id =  $request->input('id_curso');
       $curso = Project::find($curso_id);
       $curso->Reaccion_Not = 1 ;
       $curso->save();
       return response(json_encode($curso), 200)->header('Content-type', 'text/plain');
    }
}
