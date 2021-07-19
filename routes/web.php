<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EncuestasController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RespuestasController;
use App\instructor;
use App\ListInstructor;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Auth::routes();
// Auth::routes();
// Route::get('/demo','EncuestasController@store');
// Route::post('/store','EncuestasController@store');
// Route::get('/buscar','EncuestasController@search');
// Route::get('/InicioSesion','EncuestasController@inicio')->name('inicioSesion');
// Route::get('/login','EncuestasController@login')->name('inicioSesion');


//Encuestas
Route::get('/','EncuestasController@index')->name('cursos');
Route::get('/envjefe','EncuestasController@envjefe')->name('envjefe');
Route::get('/envreac','EncuestasController@envreac')->name('envreac');
Route::get('/participantes','EncuestasController@participantes')->name('participantes');
// Route::get('/eliminarParticipante','EncuestasController@eliminarParticipante');

// Inicio de sesion
Auth::routes();

//Graficas
Route::get('/graficas/{id}','GraficasController@index')->name('graficas');
Route::post('/graficas/respuestas','GraficasController@respuestas')->name('grespuestas');
Route::post('/graficas/respuestasjefe','GraficasController@respuestasjefe')->name('gresjefe');
Route::post('/respuestas/reaccion' ,'RespuestasController@subir');

// GRAFICAS PARTICIPANTE

Route::get('/graficas/{id}/participantes','GraficasController@participantes')->name('gparticipantes');
Route::get('/graficas/{id}/jefe','GraficasController@jefe')->name('gjefe');

// PDF
Route::get('/pdf/reaccion/{id}','GraficasController@pdfReaccion')->name('pdfReaccion');

// CUESTIONARIOS

Route::get('/Reaccion/{id}', 'RespuestasController@datosReaccion');


// Route::get('/Participantes/{id}',function($id_curso){

//     return view('evaluaciones.reaccion')->with('curso',$id_curso);
// });
Route::post('/respuestas/reaccion' ,'RespuestasController@subir')->name('resreaccion');
Route::get('/datos' ,'RespuestasController@datos')->name('datos');
Route::get('/departamento' ,'RespuestasController@departamento')->name('departamento');

//Encuesta Jefe inmediato
Route::get('/Encuesta/Jefe/{id}','RespuestasController@datosJefe');
Route::post('/respuestas/jefe' ,'RespuestasController@jefe')->name('resjefe');

//Optencion de las encuestas respuestas
Route::get('/Encuestas/Respuestas/{id}','RespuestasController@encuestas');

//Ruta de envio de correos
Route::get('/Correo' , 'MailController@store')->name('sendMail');
Route::get('/CorreoJefe' , 'MailController@JefeEmail')->name('sendMailJefe');
