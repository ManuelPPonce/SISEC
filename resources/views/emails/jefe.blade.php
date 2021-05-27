<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jefe Inmediato
    </title>
</head>


<body>
    {{-- <h3>{{ $curso }}</h3> --}}
    <div>

        <center>
            <div
                style=" border: 1px solid #ccc; #592A08;width: 50%;height: 100%;text-align: center;margin: 15px">
                <table>
                    <tr>
                        <div style="width: 100%;padding: 0;margin: 0;height: 80%;background-color: #52BE8E">
                        </div>
                    </tr>
                    {{-- <tr>
                    <img src="https://www.pikpng.com/pngl/b/365-3652622_cfe-logo-comision-federal-de-electricidad-png-sport.png"
                    alt="">
                </tr> --}}
                    <tr>


                        <h3>{{ $curso }}</h3>

                        <h2>A continuacion se mostara los empleados con sus jefes correspondientes</h4>

                            @foreach ($areas as $area)
                                <h4>{{ $area->Nombre_Area }} -> {{ $area->Jefe_Area }}</h4>
                                <br>
                                @foreach ($empleados as $empleado)
                                    @if ($area->Clave_Area == $empleado->Clave_Area)
                                        <li>{{ $empleado->Nombre_Empleado . ' ' . $empleado->ApellidoP_E . ' ' . $empleado->ApellidoM_E }}
                                            ->
                                            RPE : {{ $empleado->RPE_Empleado }}</li>
                                    @endif
                                @endforeach
                            @endforeach
                            <br>
                            <br>

                            <center>

                                <div style="border: 2px solid #33A487;border-radius: 4px;width: 25%;height: 24px;text-align: center;background-color: #3BB97A;padding: 5px;text-decoration: none !important; color: white">
                                    <a style="text-decoration: none;color: white;margin: 0" href="{{ $links }}"> Encuesta Jefe Inmediato</a>
                                </div>
                            </center>

                            <br>


                    </tr>
                </table>

            </div>

        </center>
</body>
</div>

</html>
