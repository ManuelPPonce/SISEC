<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Respuestas</h2>

                <div class="tabbable-panel">
                    <div class="tabbable-line">

                        <div class="mx-auto" style="width: 900px;">

                            <h1>CURSO : {{ $curso }}</h1>
                            {{-- <div class="text-right ">
                                <button class="btn btn-primary pdf"  >  <a href="{{route('pdfReaccion',$id_curso)}}"> <i class="icon ion-md-document"></i>    </a>  </button>

                            </div> --}}
                            <br></br>
                            <h2>I. Evaluación del intructor</h2>
                        </div>
                        {{-- GRAFICAS --}}

                        {{-- PREGUNTA 1 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>1- EL DOMINIO DEL TEMA POR PARTE DEL INSTRUCTOR</p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                        {{-- PREGUNTA 2 --}}
                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>2. LA EXPOSICIÓN DEL INSTRUCTOR </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart2" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 3 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>3. EL LENGUAJE QUE UTILIZÓ </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart3" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 4 --}}
                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>4. MOTIVO A UNA PARTICIPACIÓN ACTIVA</p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart4" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 5 --}}
                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>5. RESOLVIÓ DUDAS </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart5" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 6 --}}
                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>6. LA MANERA EN QUE MANEJÓ APOYO DIDÁCTICOS </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart6" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 7 --}}
                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>7. ILUSTRÓ Y CLARIFICÓ TODOS LOS PUNTOS</p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart7" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 8 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>8. FUE AMISTOSO CON EL GRUPO </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart8" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 9 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>9. SU PUNTUALIDAD FUE </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart9" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PARTE DOS DE LA EVALUACION DE REACCION --}}


                        <div class="mx-auto" style="width: 900px;">
                            <h2>II. Evaluación de la actividad de capacitación</h2>
                        </div>

                        {{-- PREGUNTA 10 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>1. LOS TEMAS TRATADOS FUERON DE MI INTERÉS </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart10" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 11 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>2. RESPONDIÓ A MIS NECESIDADES </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart11" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 12 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>3. LA DURACIÓN DE LA ACTIVIDAD </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart12" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 13 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>4. LOS OBJETIVOS DE LA ACTIVIDAD SE CUBRIERON </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart13" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 14 --}}


                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>5. EL MATERIAL QUE SE ME FACILITÓ </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart14" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 15 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>6. EL ORDEN CON QUE FUERON TRATADOS LOS TEMAS </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart15" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mx-auto" style="width: 900px;">
                            <h2>III. EVALUACIÓN DEL EVENTO</h2>
                        </div>

                        {{-- PREGUNTA 16 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>1. LAS INSTALACIONES</p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart16" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 17 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>2. EL SERVICIO DE CAFETERÍA</p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart17" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 18 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>3. EL EQUIPO UTILIZADO </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart18" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- PREGUNTA 19 --}}

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>4. EL HORARIO ASIGNADO AL EVENTO </p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart19" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>OBSERVACIONES Y SUGERENCIAS</p>
                                </div>

                                @foreach ($respuestas as $item)
                                    <div class='pie'>

                                        <span id="comentarios">

                                            {{ $item->Observaciones }}

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

    </div>

<body>

<script type="text/javascript">
window.onload = function() {

    $.ajax({

        // url: '/graficas/respuestas',
        url: "{{route('grespuestas')}}",
        type: "POST",
        data: {

            id: {{ $id_curso }},
            _token: '{{ csrf_token() }}',
        },
        success: function(data) {
            const respuestas = JSON.parse(data);
            pregunta_1 = preguntas(respuestas, 1);
            pregunta_2 = preguntas(respuestas, 2);
            pregunta_3 = preguntas(respuestas, 3);
            pregunta_4 = preguntas(respuestas, 4);
            pregunta_5 = preguntas(respuestas, 5);
            pregunta_6 = preguntas(respuestas, 6);
            pregunta_7 = preguntas(respuestas, 7);
            pregunta_8 = preguntas(respuestas, 8);
            pregunta_9 = preguntas(respuestas, 9);
            pregunta_10 = preguntas(respuestas, 10);
            pregunta_11 = preguntas(respuestas, 11);
            pregunta_12 = preguntas(respuestas, 12);
            pregunta_13 = preguntas(respuestas, 13);
            pregunta_14 = preguntas(respuestas, 14);
            pregunta_15 = preguntas(respuestas, 15);
            pregunta_16 = preguntas(respuestas, 16);
            pregunta_17 = preguntas(respuestas, 17);
            pregunta_18 = preguntas(respuestas, 18);
            pregunta_19 = preguntas(respuestas, 19);


            google.charts.load('current', {
                'packages': ['corechart']
            });

            google.charts.setOnLoadCallback(drawChart1);
            google.charts.setOnLoadCallback(drawChart2);
            google.charts.setOnLoadCallback(drawChart3);
            google.charts.setOnLoadCallback(drawChart4);
            google.charts.setOnLoadCallback(drawChart5);
            google.charts.setOnLoadCallback(drawChart6);
            google.charts.setOnLoadCallback(drawChart7);
            google.charts.setOnLoadCallback(drawChart8);
            google.charts.setOnLoadCallback(drawChart9);
            google.charts.setOnLoadCallback(drawChart10);
            google.charts.setOnLoadCallback(drawChart11);
            google.charts.setOnLoadCallback(drawChart12);
            google.charts.setOnLoadCallback(drawChart13);
            google.charts.setOnLoadCallback(drawChart14);
            google.charts.setOnLoadCallback(drawChart15);
            google.charts.setOnLoadCallback(drawChart16);
            google.charts.setOnLoadCallback(drawChart17);
            google.charts.setOnLoadCallback(drawChart18);
            google.charts.setOnLoadCallback(drawChart19);


            //PREGUNTA 1

            function drawChart1() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_1[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data);
            }
            // PREGUNTA 2

            function drawChart2() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_2[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

                chart.draw(data);
            }

            // PREGUNTA 3

            function drawChart3() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_3[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

                chart.draw(data);
            }
            // PREGUNTA 4

            function drawChart4() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_4[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

                chart.draw(data);
            }
            // PREGUNTA 5

            function drawChart5() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_5[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart5'));

                chart.draw(data);
            }
            // PREGUNTA 6

            function drawChart6() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_6[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart6'));

                chart.draw(data);
            }
            // PREGUNTA 7

            function drawChart7() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_7[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart7'));

                chart.draw(data);
            }
            // PREGUNTA 8

            function drawChart8() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_8[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart8'));

                chart.draw(data);
            }
            // PREGUNTA 9

            function drawChart9() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_9[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById('piechart9'));

                chart.draw(data);
            }
            // PREGUNTA 10
            function drawChart10() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_10[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart10'));

                chart.draw(data);
            }

            // PREGUNTA 11
            function drawChart11() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_11[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart11'));

                chart.draw(data);
            }

            // PREGUNTA 12
            function drawChart12() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_12[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart12'));

                chart.draw(data);
            }

            // PREGUNTA 13
            function drawChart13() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_13[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart13'));

                chart.draw(data);
            }

            // PREGUNTA 14
            function drawChart14() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_14[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart14'));

                chart.draw(data);
            }

            // PREGUNTA 15
            function drawChart15() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_15[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart15'));

                chart.draw(data);
            }
            // PREGUNTA 16
            function drawChart16() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_16[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart16'));

                chart.draw(data);
            }
            // PREGUNTA 17
            function drawChart17() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_17[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart17'));

                chart.draw(data);
            }

            // PREGUNTA 18
            function drawChart18() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_18[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart18'));

                chart.draw(data);
            }
            // PREGUNTA 19
            function drawChart19() {
                var dataRows = [
                    ['Pregunta', 'Valor']
                ];
                for (var i = 0; i < 10; i++) {
                    var n = (i + 1).toString();
                    dataRows.push([n, pregunta_19[i]]);
                    // console.log([ n , pregunta_1[i]]);
                }

                var data = google.visualization.arrayToDataTable(dataRows);


                var chart = new google.visualization.PieChart(document.getElementById(
                    'piechart19'));

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
        if ((element["Pregunta_" + num]) == '10') {
            pregunta_1_10++;
        } else if ((element["Pregunta_" + num]) == '9') {
            pregunta_1_9++;
        } else if ((element["Pregunta_" + num]) == '8') {
            pregunta_1_8++;
        } else if ((element["Pregunta_" + num]) == '7') {
            pregunta_1_7++;
        } else if ((element["Pregunta_" + num]) == '6') {
            pregunta_1_6++;
        } else if ((element["Pregunta_" + num]) == '5') {
            pregunta_1_5++;
        } else if ((element["Pregunta_" + num]) == '4') {
            pregunta_1_4++;
        } else if ((element["Pregunta_" + num]) == '3') {
            pregunta_1_3++;
        } else if ((element["Pregunta_" + num]) == '2') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '11') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '12') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '13') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '14') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '15') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '16') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '17') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '18') {
            pregunta_1_2++;
        } else if ((element["Pregunta_" + num]) == '19') {
            pregunta_1_2++;
        } else {
            pregunta_1_1++;
        };
    });
    var preguntas = [pregunta_1_1, pregunta_1_2, pregunta_1_3, pregunta_1_4, pregunta_1_5, pregunta_1_6,
        pregunta_1_7, pregunta_1_8, pregunta_1_9, pregunta_1_10
    ];

    // console.log(preguntas);
    return preguntas;

}

</script>

</html>
