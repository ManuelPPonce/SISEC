{{-- @section('title') Usuario {{ $id }} @endsection --}}
@extends('layouts.app')

@section('content')



    @php

    $anios = ['2019', '2020', '2021'];
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    setlocale(LC_ALL, 'es_ES');

    if (is_null($mes_actual)) {
        # code...
        $anio_actual = date('Y');
        $mes_actual = date('n');
    }

    // $indice = array_search($anio_actual, $anios, false);

    // if ($indice == false) {
    //     array_push($anios, $anio_actual);
    // }

    @endphp


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm nav-color">

            {{-- <h1>SISEC</h1> --}}
            <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            <ul class="navbar-nav ml-auto">
                @guest

                @else
                    <li class="nav-item">
                        <div id="photo"><img class="img-nav" src="{{ asset('img/peninsular.png') }}" alt=""></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cursos') }}">{{ __('SISEC') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                         document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </nav>
    </div>



    <form action="{{ route('cursos') }}" method="GET" role="form">
        {{-- Seleccionar mes y año --}}
        {{-- {{ csrf_field() }} --}}
        <select class="form-select" aria-label="Default select example" id="id_anio" name="id_anio">

            <option hidden> {{ $anio_actual }}</option>
            @foreach ($anios as $anio)
                <option value="{{ $anio }}">{{ $anio }}</option>
            @endforeach

        </select>

        <select class="form-select right" aria-label="Default select example" id="id_mes" name="id_mes">
            <option value="{{ $mes_actual }}" selected hidden> {{ $meses[$mes_actual - 1] }}</option>

            @foreach ($meses as $key => $mes)
                <option value="{{ $key + 1 }}">{{ $mes }}</option>
            @endforeach

        </select>

        <button type="submit" class="btn-buscar"><i class="icon ion-md-search"></i></button>

    </form>





    {{-- tabla --}}



    <div class="tabla-class">
        <table class="table table-bordered " id="tabla-cursos">
            <thead>
                <tr>

                    <th class="title-color">Id</th>
                    <th class="title-color">Clave</th>
                    <th class="title-color">Cursos</th>
                    <th class="title-color">Fecha Inicio</th>
                    <th class="title-color">Fecha Final</th>
                    <th class="title-color">Participantes</th>
                    <th class="title-color">Encuestas Reac.Part</th>
                    <th class="title-color">Encuesta Jefe</th>
                    <th class="title-color">Graficas</th>
                    {{-- <th class="title-color">Enviar Correo</th> --}}
                    {{-- <th class="title-color">Encuestas</th> --}}

                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>

                        <td>{{ $curso->ID_Actividad }}</td>
                        <td>{{ $curso->Clave_Actividad }}</td>
                        <td style="text-align: left">{{ $curso->Nombre_Curso }}</td>
                        <td>{{ $curso->Fecha_Inicio }}</td>
                        <td>{{ $curso->Fecha_Termino }}</td>
                        <td data-id="{{ $curso->ID_Actividad }}">
                            <button type="button" class="btn  btn-warning" data-toggle="modal" id="edit-participantes"
                                data-target="#login"><i class="icon ion-md-people"></i></button>
                        </td>
                        {{-- <td> <a href='javascript:getlink();'> <button type="button" id="btn-participante"
                                    class="btn btn-success"><i class="icon ion-md-copy"></i></button> </a> </td> --}}


                        <td>

                            <center>


                                <button class="btn btn-success" type="button" id="enviar-correo">
                                    <i class="icon ion-md-send"></i> </button>
                                    @if ($curso->Reaccion_Not == '0')
                                        <div class="indicador-red"></div>
                                    @else

                                        <div class="indicador-green"></div>

                                    @endif
                            </center>


                        </td>

                        <td class="celda-enviar">

                            <center>
                                <button class="btn btn-success" type="button" id="enviar-correoJ">
                                    <i class="icon ion-md-send"></i>
                                </button>

                                @if ($curso->Jefe_Not == '0')
                                    <div class="indicador-red-jefe"></div>
                                @else

                                    <div class="indicador-green-jefe"></div>

                                @endif

                            </center>



                        </td>
                        {{-- <td><a href='javascript:getlinkJefe();'><button id="btn-jefe" type="button"
                                    class="btn btn-success"><i class="icon ion-md-copy"></i></button></td> --}}
                        <td>
                            <a href="{{ route('graficas', $curso->ID_Actividad) }}">
                                <button type="button" class="btn btn-primary">
                                    <i class="icon ion-md-pie"></i>
                                </button>
                            </a>
                        </td>
                        {{-- <form  action="{{ route('sendMail') }}" method="post"> --}}

                        {{-- </form> --}}

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {!! Form::open(['route' => ['admin.users.destroy']]) !!} --}}
        @include('create')


        {{-- Modal --}}
        {{-- <div class="paginacion-links">

                    {!!  $cursos->links() !!}

                </div> --}}
    </div>
    </div>
    </div>
    <!-- Modal load-->




@endsection
