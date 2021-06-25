@extends('layouts.graficas')

@section('contenido')



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Respuestas</h2>

                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li>
                                <a href="{{ route('graficas', $id_curso) }}">
                                    Reacción </a>
                            </li>
                            <li class="active">
                                <a href="{{ route('gparticipantes', $id_curso) }}">
                                    Participantes </a>
                            </li>
                            <li>
                                <a href="{{ route('gjefe', $id_curso) }}">
                                    Jefe </a>
                            </li>
                        </ul>
                        <button type="submit" class="btn btn-success" id="save-pdf"> Descargar PDF</button>

                        <div class="mx-auto" style="width: 900px; float: left; padding-left: 40px">
                            <h1 id="name-curso">CURSO : {{ $curso }}</h1>
                            <br></br>
                            <h2> Evaluación del participante</h2>
                        </div>
                        {{-- GRAFICAS --}}


                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>1- EN QUÉ GRADO HA SIDO DE UTILIDAD ESTA ACTIVIDAD DE CAPACITACIÓN</p>
                                </div>

                                <div class='pie'>
                                    <div id="piechart20" style="width:800px; height:500px;"></div>
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
                                    <div id="piechart21" style="width: 800px; height: 500px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class='preguntas-pie'>
                            <div class="div-pie">
                                <div class="pregunta-titulo">

                                    <p>QUÉ ACTIVIDAD DE CAPACITACIÓN CONSIDERAS PODRIAN MEJORAR TU DESEMPEÑO</p>
                                </div>

                                @foreach ($respuestas as $item)
                                    <div class='pie-comentarios'>

                                        <span id="comentarios">

                                            {{ $item->Actividad_Mejorar }}

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

            url: "{{ route('grespuestas') }}",
            type: "POST",
            data: {

                id: {{ $id_curso }},
                _token: '{{ csrf_token() }}',
            },
            success: function(data) {
                const respuestas = JSON.parse(data);

                pregunta_20 = preguntas(respuestas, 20);
                pregunta_21 = preguntas(respuestas, 21);
                // console.log(pregunta_10);
                google.charts.load('current', {
                    'packages': ['corechart']
                });

                google.charts.setOnLoadCallback(drawChart20);
                google.charts.setOnLoadCallback(drawChart21);

                var btnSave = document.getElementById('save-pdf');
                var name = document.getElementById('name-curso').textContent;
                var doc = new jsPDF({
                    orientation: "portrait",
                    unit: "mm",
                    lineHeight: 1,
                    top: 80,
                    bottom: 60,
                    left: 40,
                    width: 522
                });


                btnSave.addEventListener('click', function() {
                    doc.save('Graficos.pdf');
                }, false);





                //PREGUNTA 1


                function drawChart20() {
                    var dataRows = [
                        ['Pregunta', 'Valor'],
                        ['Muy Útil', pregunta_20[0]],
                        ['Medianamente Útil', pregunta_20[1]],
                        ['Poco Útil', pregunta_20[2]],
                        ['Nada Útil', pregunta_20[3]],
                    ];


                    var data = google.visualization.arrayToDataTable(dataRows);


                    var chart = new google.visualization.PieChart(document.getElementById(
                        'piechart20'));

                        var options = {
                        pieSliceText: 'value-and-percentage'
                    };
                    chart.draw(data,options);
                    var splitTitle = doc.splitTextToSize(name, 180);
                    doc.text(15, 20, splitTitle);
                    doc.setFontSize(12);
                    doc.text(20, 35,
                        '1- En qué grado ha sido de utilidad esta actividad de capacitación');
                    doc.addImage(chart.getImageURI(), 10, 40);
                }

                function drawChart21() {

                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Diario', pregunta_21[0]],
                        ['Mensualmente', pregunta_21[1]],
                        ['Anualmente', pregunta_21[2]],
                        ['Nunca', pregunta_21[3]],
                    ]);

                    var chart = new google.visualization.PieChart(document.getElementById(
                        'piechart21'));

                        var options = {
                        pieSliceText: 'value-and-percentage'
                    };
                    chart.draw(data,options);
                    doc.setFontSize(11);
                    doc.text(20, 158,
                        '2- CON QUÉ FRECUENCIA UTILIZAS LO APRENDIDO EN ESTA ACTIVIDAD DE CAPACITACIÓN'
                    );
                    doc.addImage(chart.getImageURI(), 10, 160);
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
