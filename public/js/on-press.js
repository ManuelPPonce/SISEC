

var dato;
$('#tabla-cursos').on('click', '#edit-participantes', function (event) {
    //Primera fila
    $("#tabla-participantes").dataTable().fnDestroy();
    dato = $(this).parents('tr').find('td:first-child').text();
    $('#tabla-participantes tr').val(dato);
    // console.log(dato);

    let modo = '';
    // console.log('jquery is working!');

    var tabla_usuarios = $('#tabla-participantes').DataTable({
        rowId: 'staffId',
        "language": { "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json" },
        "bFilter": false,
        "bLengthChange": false,
        // "lengthMenu": false,
        "columns": [
            { "data": "id" },
            { "data": "rpe" },
            { "data": "nombre" },
        ],
    })

    GetUserList();
    // Obtener lista de usuarios
    function GetUserList() {
        return $.ajax({
            url: '/participantes',

            type: 'GET',
            data: {
                ID_Actividad: dato,
            },
            success: function (response) {
                const usuarios = JSON.parse(response);
                // console.log(usuarios); //<-aqui hago un console para ver lo que devuelve
                usuarios.forEach(user => {
                    tabla_usuarios.row.add({

                        "id": user.ID_Empleado,
                        "rpe": user.RPE_Empleado,
                        "nombre": user.Nombre_Empleado + ' ' + user.ApellidoP_E + ' ' + user.ApellidoM_E,
                    }).draw();
                });
            }
        });
    }


});

$('#login').on('hidden.bs.modal', function () {
    $('#login .modal-body').find("#tabla-participantes").html("");
});


$('#tabla-participantes').on('click', '.btncalificar', function (event) {
    //Primera fila
    var empleado_id = $(this).parents('tr').find('td:first-child').text();
    // alert(dato+" "+empleado_id);
    //todos las columnas de la fila
    // le envio el curso y el participante a eliminar
    //Aqui va el mensaje de confirmacion para borrar el registro

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: '¿Estas Seguro?',
        text: "Este procedimiento sera inrreversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, Borrar!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
                'Borrado',
                'Fue borrado Exitosamente',
                'success',

                $(this).closest('tr').remove(),
                eliminarArticulo(),
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'El participante no fue eliminado',
                'error',
            )
        }
    })
    function eliminarArticulo() {
        $.ajax({
            url: '/eliminarParticipante',
            type: 'GET',
            data: {
                id_curso: dato,
                id_empleado: empleado_id,
            },
            success: function (result) {

                // bla bla
            }
        });
    }




    //   console.log("Columnas de la Fila");
    // 	$.each($(this).parents('tr'), function(index, val) {
    // 		console.log($(val).text());
    // 	});
});

// BUSCADOR DE TABLA PARTICIPANTES



// const searchButton = document.getElementById('search-button');
// const searchInput = document.getElementById('search-input');
// searchButton.addEventListener('click', () => {
//     const inputValue = searchInput.value;
//     alert(inputValue);
// });


// $("#search-input").autocomplete({
//     source: function (request, response) {
//         $.ajax({
//             url: "/buscar",
//             dataType: "json",
//             data: {
//                 term: request.term
//             },
//             success: function (data) {
//                 response(data);
//             }
//         });
//     }

// });

// optener datos de la url
var id_curso;
$('#tabla-cursos').on('click', '#btn-participante', function (event) {
    id_curso = $(this).parents('tr').find('td:first-child').text();
}
);
var id_curso_jefe;
$('#tabla-cursos').on('click', '#btn-jefe', function (event) {
    id_curso_jefe = $(this).parents('tr').find('td:first-child').text();
}
);
var $id_curso_correo;
$('#tabla-cursos').on('click', '#enviar-correo', function (event) {
    $id_curso_correo = $(this).parents('tr').find('td:first-child').text();
}
);
var $id_curso_correo_jefe;
$('#tabla-cursos').on('click', '#enviar-correoJ', function (event) {
    $id_curso_correo_jefe = $(this).parents('tr').find('td:first-child').text();
}
);


//Correo de Jefes
$('#tabla-cursos').on('click', '#enviar-correoJ', function (event) {

    swal({
        title: "Enviando Correo",
        text: 'Por favor , Espere',
        button: false,
    })
    //Generar Link

    var aux = document.createElement("input");

    aux.setAttribute("value", window.location.href.split("?")[0].split("#")[0] + 'Encuesta/Jefe/' + $id_curso_correo_jefe);
    var link_j = ("value", window.location.href.split("?")[0].split("#")[0] + 'Encuesta/Jefe/' + $id_curso_correo_jefe);
    document.body.appendChild(aux);

    // console.log(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);

    // aux = aux + 'reaccion';
    // var css = document.createElement("style");
    // var estilo = document.createTextNode(
    //     "#aviso {position:fixed; z-index: 9999999; widht: 120px; top:30%;left:50%;margin-left: -60px;padding: 20px; background: gold;border-radius: 8px;font-size: 14px;font-family: sans-serif;}"
    // );
    // css.appendChild(estilo);
    // document.head.appendChild(css);
    // var aviso = document.createElement("div");
    // aviso.setAttribute("id", "aviso");
    // var contenido = document.createTextNode("URL copiada");
    // aviso.appendChild(contenido);
    // document.body.appendChild(aviso);
    // window.load = setTimeout("document.body.removeChild(aviso)", 1000);

    $.ajax({
        url: '/envjefe',
        type: 'GET',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            id_curso: $id_curso_correo_jefe,
        },success:function(result){

        }
    });

    // Enviar correo
    $.ajax({
        url: '/CorreoJefe',
        type: 'GET',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            link: link_j,
            id_curso: $id_curso_correo_jefe,



        },
        success: function (result) {

            swal({
                title: "Envío Exitoso",
                text: "Los correos han sido  enviados correctamente ",
                icon: "success",
                button: "Aceptar",

            });

            // var participantes = "";
            // result.forEach(element => {
            //     participantes += (element.Nombre_Empleado + " " + element.ApellidoP_E + " " + element.ApellidoM_E + '\n' );
            // });

            // if (result.length === 0) {
            //     swal({
            //         title: "Envío Exitoso",
            //         text: "Los correos han sido  enviados correctamente ",
            //         icon: "success",
            //         button: "Aceptar",
            //       });
            // } else {
            //     swal({
            //         title: "Atención",
            //         text: "No se encontrarón los correos de los siguientes participantes:  "  + '\n' + participantes ,
            //         icon: "info",
            //         button: "Aceptar",
            //       });

        }

        // console.log(result[0].Nombre_Empleado+);
        // alert(JSON.stringify(result));

        // }
    });

});

//Carga
var sweet_loader = '<div class="sweet_loader"><svg viewBox="0 0 140 140" width="140" height="140"><g class="outline"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="rgba(0,0,0,0.1)" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></g><g class="circle"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="#71BBFF" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-dashoffset="200" stroke-dasharray="300"></path></g></svg></div>';
//Correo de Reaccion
$('#tabla-cursos').on('click', '#enviar-correo', function (event) {

    swal({
        title: "Enviando Correo",
        text: 'Por favor , Espere',
        button: false,
    })
    //Generar Link
    var aux = document.createElement("input");
    var link;
    // var link_j = ("value", window.location.href.split("?")[0].split("#")[0] + 'Encuesta/Jefe/' + $id_curso_correo);
    aux.setAttribute("value", window.location.href.split("?")[0].split("#")[0] + 'Reaccion/' + $id_curso_correo);
    document.body.appendChild(aux);
    link = ("value", window.location.href.split("?")[0].split("#")[0] + 'Reaccion/' + $id_curso_correo);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);

    //Copiar link
    // var css = document.createElement("style");
    // var estilo = document.createTextNode(
    //     "#aviso {position:fixed; z-index: 9999999; widht: 120px; top:30%;left:50%;margin-left: -60px;padding: 20px; background: gold;border-radius: 8px;font-size: 14px;font-family: sans-serif;}"
    // );
    // css.appendChild(estilo);
    // document.head.appendChild(css);
    // var aviso = document.createElement("div");
    // aviso.setAttribute("id", "aviso");
    // var contenido = document.createTextNode("URL copiada");
    // aviso.appendChild(contenido);
    // document.body.appendChild(aviso);
    // window.load = setTimeout("document.body.removeChild(aviso)", 1000);

    $.ajax({
        url: '/envreac',
        type: 'GET',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            id_curso: $id_curso_correo,
        },success:function(result){

        }
    });


    // // Enviar correo
    $.ajax({
        url: '/Correo',
        type: 'GET',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            link: link,
            id_curso: $id_curso_correo,



        },
        success: function (result) {
            var participantes = "";
            result.forEach(element => {
                participantes += (element.Nombre_Empleado + " " + element.ApellidoP_E + " " + element.ApellidoM_E + '\n');
            });

            if (result.length === 0) {
                swal({
                    title: "Envío Exitoso",
                    text: "Los correos han sido  enviados correctamente ",
                    icon: "success",
                    button: "Aceptar",
                });
            } else {
                swal({
                    title: "Atención",
                    text: "No se encontrarón los correos de los siguientes participantes:  " + '\n' + participantes,
                    icon: "info",
                    button: "Aceptar",
                });

            }

            // console.log(result[0].Nombre_Empleado+);
            // alert(JSON.stringify(result));

        }
    });
});
