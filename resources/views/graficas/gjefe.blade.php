@extends('layouts.graficas')

@section('contenido')


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Respuestas</h2>

                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li >
                                    <a href="{{ route('graficas', $id_curso) }}">
                                        Reacción </a>
                                </li>
                                <li>
                                    <a href="{{ route('gparticipantes', $id_curso) }}">
                                        Participantes </a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('gjefe', $id_curso) }}">
                                        Jefe </a>
                                </li>
                            </ul>

                            <div class="mx-auto" style="width: 900px;">

                                <h1>CURSO : {{ $curso }}</h1>
                                <br></br>
                                <h2> Evaluación del jefe </h2>
                            </div>
                            {{-- GRAFICAS --}}


                            <div class='preguntas-pie'>
                                <div class="div-pie">
                                    <div class="pregunta-titulo">

                                        <p>1- EN QUÉ GRADO HA SIDO DE UTILIDAD ESTA ACTIVIDAD DE CAPACITACIÓN</p>
                                    </div>

                                    <div class='pie'>
                                        <div id="piechart1" style="width:800px; height:500px;"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- PREGUNTA 2 --}}

                            <div class='preguntas-pie'>
                                <div class="div-pie">
                                    <div class="pregunta-titulo">

                                        <p>2- CON QUÉ FRECUENCIA UTILIZAS LO APRENDIDO EN ESTA ACTIVIDAD DE
                                            CAPACITACIÓN</p>
                                    </div>

                                    <div class='pie'>
                                        <div id="piechart2" style="width: 800px; height: 500px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class='preguntas-pie'>
                                <div class="div-pie">
                                    <div class="pregunta-titulo">

                                        <p>QUÉ ACTIVIDAD DE CAPACITACIÓN CONSIDERAS PODRIAN MEJORAR TU DESEMPEÑO</p>
                                    </div>

                                    @foreach ($respuestas as $item)
                                        <div class='pie'>

                                            <span id="comentarios">

                                                {{ $item->Pregunta_3 }}

                                            </span>


                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class='preguntas-pie'>
                                <div class="div-pie">
                                    <div class="pregunta-titulo">

                                        <p>QUÉ ACTIVIDAD DE CAPACITACIÓN CONSIDERAS PODRIAN MEJORAR TU DESEMPEÑO</p>
                                    </div>

                                    @foreach ($respuestas as $item)
                                        <div class='pie'>

                                            <span id="comentarios">

                                                {{ $item->Comentarios }}

                                            </span>


                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


<script type="text/javascript">
    window.onload = function() {

        $.ajax({

            url: "{{route('gresjefe')}}",
            type: "POST",
            data: {

                id: {{ $id_curso }},
                _token: '{{ csrf_token() }}',
            },
            success: function(data) {
                const respuestas = JSON.parse(data);

                pregunta_1 = preguntas(respuestas, 1);
                pregunta_2 = preguntas(respuestas, 2);
                // console.log(respuestas);
                // console.log(pregunta_10);
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                google.charts.setOnLoadCallback(drawChart1);
                google.charts.setOnLoadCallback(drawChart2);

                //PREGUNTA 1


                function drawChart1() {
                    var dataRows = [
                        ['Pregunta', 'Valor'],
                        ['Si', pregunta_1[0]],
                        ['Medianamente', pregunta_1[1]],
                        ['Escasamente', pregunta_1[2]],
                        ['No', pregunta_1[3]],
                    ];


                    var data = google.visualization.arrayToDataTable(dataRows);


                    var chart = new google.visualization.PieChart(document.getElementById(
                        'piechart1'));

                    chart.draw(data);
                }

                function drawChart2() {

                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Incrementar la practica', pregunta_2[0]],
                        ['Asesoria', pregunta_2[1]],
                        ['Volver a tomar la actividad de capacitación', pregunta_2[2]],

                    ]);

                    var chart = new google.visualization.PieChart(document.getElementById(
                        'piechart2'));

                    chart.draw(data);
                }



            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error al filtrar');
            }
        });


    }

    function preguntas(respuestas, num) {
        var pregunta_1_10 = 0;
        var pregunta_1_9 = 0;
        var pregunta_1_8 = 0;
        var pregunta_1_7 = 0;
        var pregunta_1_6 = 0;
        var pregunta_1_5 = 0;
        var pregunta_1_4 = 0;
        var pregunta_1_3 = 0;
        var pregunta_1_2 = 0;
        var pregunta_1_1 = 0;
        respuestas.forEach((element, index) => {
            if ((element["Pregunta_" + num]) == '4') {
                pregunta_1_4++;
            } else if ((element["Pregunta_" + num]) == '3') {
                pregunta_1_3++;
            } else if ((element["Pregunta_" + num]) == '2') {
                pregunta_1_2++;
            } else {
                pregunta_1_1++;
            };
        });
        var preguntas = [pregunta_1_1, pregunta_1_2, pregunta_1_3, pregunta_1_4, ];

        // console.log(preguntas);
        return preguntas;

    }

</script>

</html>
