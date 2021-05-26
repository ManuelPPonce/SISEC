<?php

namespace App\Http\Controllers;

use App\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response


     //  */
    // public function __invoke(Request $request)
    // {
    //     //

    // }

    public function index(){
        $participantes = Participante::all();
        return view('create', compact('participantes'));
    }
}
