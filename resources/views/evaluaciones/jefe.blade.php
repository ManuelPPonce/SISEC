@extends('layouts.encuestas')

@section('contenido')
@section('title') Jefe @endsection

@php
// echo $curso;

$curso = request()->route('id');
$curso_id = (int) $curso;

@endphp

<body>
    <form action="{{route('resjefe')}}" method="post">
        {{ csrf_field() }}

        <head>
            <img class="logo" src="{{asset('img/CFE-logo.png')}}" >
            <!-- <h2>2021 Teconologias y Tipos de Medición</h2> -->
            <h1>EVALUACIÓN POR EL JEFE INMEDIATO</h1>
            <BR></BR>

            <section class="info">
                <div class="info-left">

                    <p>NOMBRE DEL PARTICIPANTE : <span id="nombre"></span> </p>
                    <p>PUESTO : <span id="puesto"></span></p>
                    <p>DEPARTAMENTO : <span id="departamento"> </span></p>
                    <p>NOMBRE DE LA ACTIVIDAD DE CAPACITACIÓN: <strong> {{ $curso_name }} </strong> </p>
                </div>
                <div class="info-rigth">
                    <label>RPE : </label> <input name="rpe" id="rpe" type="text" Required />
                    <input hidden name="curso" id="rpe" type="text" value="{{ $curso }}" onKeyUp="buscar();"
                        readonly="readonly" Required />

                </div>

            </section>
        </head>

        <section class="instruccion">
            <h2>SELECCIONE LA OPCIÓN QUE CORRESPONDA A SU EXPECTATIVA </h2>
        </section>

        <!-- preguntas  -->

        <section class="preguntas">

            <!-- pregunta 1 -->
            <div>
                <div class="pregunta">
                    <h3>1-¿SE HAN LOGRADO LOS RESULTADOS ESPERADOS CON ESTA ACTIVIDAD DE CAPACITACIÓN?</h3>

                </div>
                <div id="participante-1">

                    <div class="opciones">

                        <input type="radio" name="opcion-1" value="1" required> SI
                    </div>
                    <div class="opciones">

                        <input type="radio" name="opcion-1" value="2"> MEDIANAMENTE
                    </div>
                    <div class="opciones">

                        <input type="radio" name="opcion-1" value="3"> ESCASAMENTE
                    </div>
                    <div class="opciones">

                        <input type="radio" name="opcion-1" value="4"> NO
                    </div>

                </div>
            </div>

            <!-- pregunta 2 -->

            <div>

                <div class="pregunta">
                    <h3>2- ¿QUÉ RECOMIENDA PARA MEJORAR EL DESEMPEÑO DE ESTA PERSONA?</h3>

                </div>

                <div id="participante-2">


                    <div class="opciones">
                        <input type="radio" name="opcion-2" value="1" required> INCREMENTAR LA PRACTICA

                    </div>
                    <div class="opciones">
                        <input type="radio" name="opcion-2" value="2"> ASESORIA

                    </div>
                    <div class="opciones">
                        <input type="radio" name="opcion-2" value="3"> VOLVER A TOMAR LA ACTIVIDAD DE CAPACITACIÓN

                    </div>



                </div>


            </div>

            <!-- pregunta 3 -->
            <div>
                <div>

                </div>
                <h3>3- QUÉ ACTIVIDAD DE CAPACITACIÓN CONSIDERAS PODRÍAN MEJORAR EL DESEMPEÑO DEL TRABAJADOR?</h3>
                <br></br>
                <div class="form-group comentarios-participante">
                    {{-- <label for="exampleFormControlTextarea1">Comentarios: </label> --}}
                    <textarea name="pregunta-3" class="form-control" id="exampleFormControlTextarea1" rows="5"
                        required></textarea>
                </div>


            </div>
            <br></br>
            <div class="form-group comentarios-participante">
                <label for="exampleFormControlTextarea1">Comentarios: </label>
                <textarea name="comentarios" class="form-control" id="exampleFormControlTextarea2" rows="5"></textarea>
            </div>

            <div>

            </div>
            <button type="submit" class="btn btn-success btn-enviar">ENVIAR</button>
        </section>



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

            url: "{{route('datos')}}",
            type: 'GET',
            data: {
                rpe: parametros,

            },
            beforeSend: function() {},
            success: function(response) {
                // console.log(response);

                $(".salida").html(response);
                const empleado = JSON.parse(response);
                empleado.forEach(user => {
                    document.getElementById('nombre').innerHTML = user.Nombre_Empleado +
                        " " + user.ApellidoP_E + " " + user.ApellidoM_E;
                    document.getElementById('puesto').innerHTML = user.Puesto;
                    clave_area = user.Clave_Area;

                });

                $.ajax({

                    url: "{{route('departamento')}}",
                    type: 'GET',
                    data: {
                        area: clave_area,

                    },
                    beforeSend: function() {},
                    success: function(response) {
                        // console.log(response);

                        $(".salida").html(response);
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
