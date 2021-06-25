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
                            <li>
                                <a href="{{ route('gparticipantes', $id_curso) }}">
                                    Participantes </a>
                            </li>
                            <li class="active">
                                <a href="{{ route('gjefe', $id_curso) }}">
                                    Jefe </a>
                            </li>
                        </ul>

                        {{-- Descargar PDF --}}
                        <button type="submit" class="btn btn-success" id="save-pdf"> Descargar PDF</button>

                        <div class="mx-auto" style="width: 900px; float: left; padding-left: 40px">

                            <h1 id="name-curso">CURSO : {{ $curso }}</h1>
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

                                    <p id="preg-1">QUÉ ACTIVIDAD DE CAPACITACIÓN CONSIDERAS PODRIAN MEJORAR TU DESEMPEÑO</p>
                                </div>

                                @foreach ($respuestas as $item)
                                <div class='pie-comentarios'>

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
                                    <div class='pie-comentarios'>

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

            url: "{{ route('gresjefe') }}",
            type: "POST",
            data: {

                id: {{ $id_curso }},
                _token: '{{ csrf_token() }}',
            },
            success: function(data) {
                const respuestas = JSON.parse(data);
                var btnSave = document.getElementById('save-pdf');

                pregunta_1 = preguntas(respuestas, 1);
                pregunta_2 = preguntas(respuestas, 2);
                // console.log(respuestas);
                // console.log(pregunta_10);
                google.charts.load('current', {
                    'packages': ['corechart']
                }).then

                google.charts.setOnLoadCallback(drawChart1);
                google.charts.setOnLoadCallback(drawChart2);



                //CREACION DE PDF
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
                    doc.save('chart.pdf');
                }, false);




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

                    doc.setFontSize(13);
                    // API.text = function (text, x, y, flags, angle, align);
                    // doc.text(name, doc.internal.pageSize.width, 50, null, null, 'center');
                    var splitTitle = doc.splitTextToSize(name, 180);
                    doc.text(15, 20, splitTitle);
                    // doc.text(name, 5, 20);
                    var options = {
                        pieSliceText: 'value-and-percentage'
                    };
                    chart.draw(data, options);
                    doc.setFontSize(12);
                    doc.text(20, 35,
                        '1- EN QUÉ GRADO HA SIDO DE UTILIDAD ESTA ACTIVIDAD DE CAPACITACIÓN');
                    doc.addImage(chart.getImageURI(), 10, 40);

                }



                function drawChart2() {

                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Incrementar la practica', pregunta_2[0]],
                        ['Asesoria', pregunta_2[1]],
                        ['Volver a tomar la actividad de capacitación', pregunta_2[
                            2]],

                    ]);

                    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));


                    // chart.draw(data);
                    // Creacion de pdf
                    var options = {
                        pieSliceText: 'value-and-percentage'
                    };
                    chart.draw(data, options);
                    doc.setFontSize(11);
                    doc.text(20, 158,
                        '2- CON QUÉ FRECUENCIA UTILIZAS LO APRENDIDO EN ESTA ACTIVIDAD DE CAPACITACIÓN'
                    );
                    doc.addImage(chart.getImageURI(), 10, 160);
                    // doc.addPage();
                    // doc.setFontSize(11);
                    // doc.text( 20 , 30 , 'QUÉ ACTIVIDAD DE CAPACITACIÓN CONSIDERAS PODRIAN MEJORAR TU DESEMPEÑO' );


                }


                // chart.draw(data, {
                //     chartArea: {
                //         bottom: 24,
                //         left: 36,
                //         right: 12,
                //         top: 48,
                //         width: '100%',
                //         height: '100%'
                //     },
                //     height: 600,
                //     title: name,
                //     width: 600
                // });

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
