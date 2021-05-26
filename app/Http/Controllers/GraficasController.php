<?php

namespace App\Http\Controllers;

use App\Project;
use App\RespuestasJefe;
use App\RespuestasReaccion;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class GraficasController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        //
        return view('graficas');
    }

    public function index(Request $request, $id_curso)
    {
        $curso = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();
        $respuestas = RespuestasReaccion::where('ID_Actividad', $id_curso)->get();
        // dd($respuestas);
        return view('graficas', compact('id_curso', 'curso', 'respuestas'));
    }

    public function respuestas(Request $request)
    {
        $id_curso = $request->input('id');
        $respuestas = RespuestasReaccion::where('ID_Actividad', $id_curso)->get();
        $id_act = $request->input('id_actividad');
        return response(json_encode($respuestas), 200)->header('Content-type', 'text/plain');
    }
    public function participantes(Request $request, $id_curso)
    {
        $curso = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();
        $respuestas = RespuestasReaccion::where('ID_Actividad', $id_curso)->get();
        // dd($respuestas);
        return view('graficas.gparticipantes', compact('id_curso', 'curso', 'respuestas'));
    }
    public function jefe(Request $request, $id_curso)
    {
        $curso = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();
        $respuestas = RespuestasJefe::where('ID_Actividad', $id_curso)->get();
        // dd($respuestas);
        return view('graficas.gjefe', compact('id_curso', 'curso', 'respuestas'));
    }

    public function respuestasjefe(Request $request)
    {
        $id_curso = $request->input('id');
        $respuestas = RespuestasJefe::where('ID_Actividad', $id_curso)->get();
        $id_act = $request->input('id_actividad');
        return response(json_encode($respuestas), 200)->header('Content-type', 'text/plain');
    }


    //Crear pdf

    public function pdfReaccion($id_curso)
    {
        // $curso = Project::where('ID_Actividad', $id_curso)->pluck('Nombre_Curso')->first();
        // $respuestas = RespuestasReaccion::where('ID_Actividad', $id_curso)->get();
        // // instantiate and use the dompdf class
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml(view('pdf.reaccion', compact('id_curso', 'curso', 'respuestas')));

        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'portraid');

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Output the generated PDF to Browser
        // $dompdf->stream();
    }
}
