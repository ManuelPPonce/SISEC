@extends('layouts.encuestas')
@section('contenido')
@section('title') Reacción @endsection


@php
// echo $curso;

$curso = request()->route('id');
$curso_id = (int) $curso;

@endphp

{{-- //DECLARACION DE VARIABLES --}}



<body>

    <form action="{{route('resreaccion')}}"" method="POST">
        {{ csrf_field() }}

        <head>
            {{-- <img class="logo" src="img/CFE-logo.png" alt=""> --}}
            <!-- <h2>2021 Teconologias y Tipos de Medición</h2> -->
            <br>
            <h1>Evaluación de Reacción</h1>
            <h2 class="explicacion">
                CONOCER SU OPINIÓN AL TÉRMINO DEL ESTE EVENTO DE CAPACITACIÓN ES SUMAMENTE IMPORTANTE YA QUE NOS
                PERMITIRÁ
                ORIENTAR MEJOR
                NUESTRO TRABAJO Y CONOCER NUESTRAS ÁREAS DE OPORTUNIDAD;ASI COMO,AL INSTRUCTOR O FACILITADOR SUPERARSE
                EN
                ESTA ACTIVIDAD.
            </h2>
        </head>
        <section class="info">
            <div class="info-left">
                <p>NOMBRE DE LA ACTIVIDAD : <strong> {{ $curso_name }} </strong> </p>
                <p>FECHA DE LA REALIZACIÓN DEL : <strong>{{ $fecha_inicio }} AL {{ $fecha_final }} </strong> </p>

                @if (is_null($instructor))

                    <p>NOMBRE DEL INSTRUCTOR : <strong>No hay instructor designado</strong></p>
                @else
                    <p>NOMBRE DEL INSTRUCTOR : <span>
                            {{ $instructor->Nombre_Instructor . ' ' . $instructor->ApellidoP_I . ' ' . $instructor->ApellidoM_I }}
                        </span></p>

                @endif

            </div>
            <div class="info-rigth">
                {{-- <p>RPE DEL TRABAJADOR:</p> --}}
                <label>RPE : </label> <input name="rpe" id="rpe" type="text" Required />
                <input hidden name="curso" id="rpe" type="text" value="{{ $curso }}" onKeyUp="buscar();"
                    readonly="readonly" Required />
                <br></br>
                <p>HORARIO DE HRS : <strong> {{ $hora_inicio }} A {{ $hora_final }} </strong> </p>
                <P>DURACIÓN TOTAL : <strong> {{ $total_horas }} HRS </strong> </p>
            </div>

        </section>




        <!-- I- Evaluacion deL instructor  -->
        <section class="tabla-instructor">

            <table class="table table-success table-striped">

                <tr class="table-success">
                    <thead>
                        <th>I. EVALUACIÓN DEL INSTRUCTOR</th>

                        <th>EXCELENTE </th>

                        <th colspan="2">BUENO</th>

                        <th colspan="2">REGULAR</th>

                        <th colspan="5">MALO</th>
                    </thead>


                </tr>
                <tbody>
                    <!-- Calificacion -->
                    <tr class="ponderacion">
                        <th></th>
                        <th>10</th>
                        <th>9</th>
                        <th>8</th>
                        <th>7</th>
                        <th>6</th>
                        <th>5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    <tr class="pregunta-1">

                        <td>1. EL DOMINIO DEL TEMA POR PARTE DEL INSTRUCTOR</td>
                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="9" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="8" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-1" value="1">
                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td>2. LA EXPOSICIÓN DEL INSTRUCTOR</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-2" value="1">
                            </div>
                        </td>



                    </tr>

                    <tr>

                        <td>3. EL LENGUAJE QUE UTILIZÓ</td>
                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-3" value="1">
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>4. MOTIVO A UNA PARTICIPACIÓN ACTIVA</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-4" value="1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>5. RESOLVIÓ DUDAS</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-5" value="1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>6. LA MANERA EN QUE MANEJO APOYO DIDÁCTICOS</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-6" value="1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>7. ILUSTRO Y CLARIFICO TODOS LOS PUNTOS</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-7" value="1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>8. FUE AMISTOSO CON EL GRUPO</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-8" value="1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>9. SU PUNTUALIDAD FUE </td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="pregunta-9" value="1">
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>

        </section>

        <!-- II- Evaluacion de la Actividad de Capacitación  -->
        <section class="tabla-capacitacion">

            <table class="table table-success table-striped">

                <tr class="table-success">
                    <thead>
                        <th>II. EVALUACIÓN DE LA ACTIVIDAD O CAPACITACIÓN </th>

                        <th>EXCELENTE </th>

                        <th colspan="2">BUENO</th>

                        <th colspan="2">REGULAR</th>

                        <th colspan="5">MALO</th>
                    </thead>


                </tr>
                <tbody>
                    <!-- Calificacion -->
                    <tr class="ponderacion">
                        <th></th>
                        <th>10</th>
                        <th>9</th>
                        <th>8</th>
                        <th>7</th>
                        <th>6</th>
                        <th>5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    <tr class="pregunta-1">

                        <td>1. LOS TEMAS TRATADOS FUERON DE MI INTERÉS</td>
                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-1" value="1">
                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td>2. RESPONDIÓ A MIS NECESIDADES</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-2" value="1">
                            </div>
                        </td>



                    </tr>

                    <tr>

                        <td>3. LA DURACIÓN DE LA ACTIVIDAD</td>
                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-3" value="1">
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>4. LOS OBJETIVOS DE LA ACTIVIDAD SE CUBRIERON</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-4" value="1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>5. EL MATERIAL QUE SE ME FACILITÓ</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-5" value="1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>6. EL ORDEN CON QUE FUERON TRATADOS LOS TEMAS</td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="1-pregunta-6" value="1">
                            </div>
                        </td>
                    </tr>


                </tbody>

            </table>


        </section>


        <!-- III- Evaluacion del evento  -->
        <section class="tabla-evento">

            <table class="table table-success table-striped">

                <tr class="table-success">
                    <thead>
                        <th>III. EVALUACIÓN DEL EVENTO </th>

                        <th>EXCELENTE </th>

                        <th colspan="2">BUENO</th>

                        <th colspan="2">REGULAR</th>

                        <th colspan="5">MALO</th>
                    </thead>


                </tr>
                <tbody>
                    <!-- Calificacion -->
                    <tr class="ponderacion">
                        <th></th>
                        <th>10</th>
                        <th>9</th>
                        <th>8</th>
                        <th>7</th>
                        <th>6</th>
                        <th>5</th>
                        <th>4</th>
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>
                    <tr class="pregunta-1">

                        <td>1. LAS INSTALACIONES </td>
                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-1" value="1">
                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td>2. EL SERVICIO DE CAFETERÍA </td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-2" value="1">
                            </div>
                        </td>



                    </tr>

                    <tr>

                        <td>3. EL EQUIPO UTILIZADO </td>
                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-3" value="1">
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>4. EL HORARIO ASIGNADO AL EVENTO </td>

                        <td class="radio-options">
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="10" required>
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="9">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="8">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="7">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="6">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="4">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="2">
                            </div>
                        </td>
                        <td>
                            <div class="radio-options">
                                <input type="radio" name="2-pregunta-4" value="1">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>


        <!-- observaciones y sugerencias -->
        <div class="form-group comentarios">
            <label for="exampleFormControlTextarea1">Comentarios: </label>
            <textarea name="observaciones" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        {{-- <section class="obs-sug">
            <h3>OBERVACIONES Y SUGERENCIAS: </h3>
            <textarea id="comentarios" name="observaciones" cols="30" rows="5"></textarea>

        </section> --}}

        <!-- boton para enviar formulario -->

        <h1 id="titulo-participante">Evaluación del participante</h1>

        <section class="info">
            <div class="info-left">

                <p>NOMBRE DEL PARTICIPANTE : <span id="nombre"></span> </p>
                <p>PUESTO : <span id="puesto"></span></p>
                <p>DEPARTAMENTO : <span id="departamento"> </span> </p>
                <p>NOMBRE DE LA ACTIVIDAD DE CAPACITACIÓN: <span>{{ $curso_name }}</span> </p>
            </div>
            <div class="info-rigth">


            </div>

        </section>
        </head>

        <section class="instruccion">
            <h2>SELECCIONE EL CUADRO QUE CORRESPONDA A SU EXPECTATIVA </h2>
        </section>

        <!-- preguntas  -->

        <section class="preguntas">

            <!-- pregunta 1 -->
            <div>
                <h3>1- EN QUÉ GRADO HA SIDO DE UTILIDAD ESTA ACTIVIDAD DE CAPACITACIÓN</h3>
                <div id="participante-1">

                    <input class='preguntas-participantes' type="radio" name="opcion-1" value="1" required> MUY ÚTIL
                    <input class='preguntas-participantes' type="radio" name="opcion-1" value="2"> MEDIANAMENTE ÚTIL
                    <input class='preguntas-participantes' type="radio" name="opcion-1" value="3"> POCO ÚTIL
                    <input class='preguntas-participantes' type="radio" name="opcion-1" value="4"> NADA ÚTIL

                </div>
            </div>

            <!-- pregunta 2 -->
            <div>
                <h3>2- CON QUÉ FRECUENCIA UTILIZAS LO APRENDIDO EN ESTA ACTIVIDAD DE CAPACITACIÓN?</h3>



                <div id="participante-2">

                    <input class='preguntas-participantes' type="radio" name="opcion-2" value="1" required> DIARIO
                    <input class='preguntas-participantes' type="radio" name="opcion-2" value="2"> MENSUALMENTE
                    <input class='preguntas-participantes' type="radio" name="opcion-2" value="3"> ANUALMENTE
                    <input class='preguntas-participantes' type="radio" name="opcion-2" value="4"> NUNCA

                </div>


            </div>

            <!-- pregunta 3 -->
            <div id="participante-3">
                <h3>3- QUÉ ACTIVIDAD DE CAPACITACIÓN CONSIDERAS PODRÍAN MEJORAR TU DESEMPEÑO?</h3>

                <div class="form-group comentarios-participante">
                    {{-- <label for="exampleFormControlTextarea1">Comentarios: </label> --}}
                    <textarea name="comentario" class="form-control" id="exampleFormControlTextarea2" rows="5"
                        required></textarea>
                </div>


            </div>

        </section>


        <button type="submit" class="btn btn-success btn-enviar">ENVIAR</button>


    </form>



</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    var input = document.querySelector('.form-control')
    var fontSize = 15
    // Tamaño inicial
    input.style.fontSize = `${fontSize}px`

    input.addEventListener('.form-control', () => {
        var l = input.value.length
        var s = (l / 5) | 0 // Disminuimos 1px cada 5 caracteres
        input.style.fontSize = `${(fontSize - s) || 1}px`
    })

    var input = document.querySelector('#exampleFormControlTextarea2')
    var fontSize = 15
    // Tamaño inicial
    input.style.fontSize = `${fontSize}px`

    input.addEventListener('#exampleFormControlTextarea2', () => {
        var l = input.value.length
        var s = (l / 5) | 0 // Disminuimos 1px cada 5 caracteres
        input.style.fontSize = `${(fontSize - s) || 1}px`
    })

</script>
<script>
    var clave_area;
    $("#rpe").keyup(function() {
        var parametros = $(this).val()
        $.ajax({

            url: "/datos",
            type: 'GET',
            data: {
                rpe: parametros,

            },
            beforeSend: function() {},
            success: function(response) {

                // $(".salida").html(response);
                const empleado = JSON.parse(response);
                empleado.forEach(user => {
                    document.getElementById('nombre').innerHTML = user.Nombre_Empleado +
                        " " + user.ApellidoP_E + " " + user.ApellidoM_E;
                    document.getElementById('puesto').innerHTML = user.Puesto;
                    clave_area = user.Clave_Area;


                });
                $.ajax({

                    url: "/departamento",
                    type: 'GET',
                    data: {
                        area: clave_area,

                    },
                    beforeSend: function() {},
                    success: function(response) {
                        // console.log(response);

                        // $(".salida").html(response);
                        const area = JSON.parse(response);
                        area.forEach(user => {
                            document.getElementById('departamento').innerHTML =
                                user.Nombre_Area;
                        });

                    },
                    error: function() {
                        alert("error")
                    }
                });

            },
            error: function() {
                alert("error")
            }
        });
    })

</script>

</html>
