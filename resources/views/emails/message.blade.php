 <!-- Hecho por : Manuel Perez Ponce
    Para la cfe De Merida
    Fecha : Abril del 2021 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de Reccion</title>
    {{--
    <link rel="stylesheet" href="{{ asset('css/email.css') }}"> --}}
</head>
<style>
    #correo {
        border: 1px solid #ccc;
        box-shadow: 7px 7px 15px #592A08;
        /* border-radius: 20px; */
        width: 50%;
        height: 100%;
        text-align: center;
        margin: 15px;
    }

    #link {
        border: 2px solid #33A487;
        border-radius: 4px;
        width: 25%;
        height: 24px;
        text-align: center;
        background-color: #3BB97A;
        padding: 5px;
        text-decoration: none !important;
        color: white;
        /* font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; */

    }

    #link-curso {
        text-decoration: none;
        color: white;

    }


    #center {
        text-align: center;
    }

    p {
        padding: 20px;
        margin-bottom: 10px;
    }

    #sup {
        width: 100%;
        padding: 0;
        margin: 0;
        height:80%;
        background-color: #52BE8E;
    }
    img{
        width: 40%;
        margin-top: 20px;
        margin-bottom: 15px;
        float: inline-end !important;
    }
</style>

<body>
    <center>

        <div id="correo">
            <table>
                <tr>
                    <div id="sup">
                    </div>
                </tr>
                <tr>
                    <img src="https://www.pikpng.com/pngl/b/365-3652622_cfe-logo-comision-federal-de-electricidad-png-sport.png" alt="">
                </tr>
                <tr>

                    <h2>Encuestas del Curso : </h2>
                    <h3>{{$curso}}</h3>

                    <p>
                        Por este medio se le solicita al participante , que conteste las siguientes encuestas anexadas
                        en el
                        enlace que se encuentra en la parte inferior de este correo.
                    </p>
                    <center>

                        <div id="link">
                            <a id="link-curso" href="{{ $links }}"> Encuesta de Reaccion</a>
                        </div>
                    </center>

                    <br>


                </tr>
            </table>

        </div>
    </center>



</body>

</html>
