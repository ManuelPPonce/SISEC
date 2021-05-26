
<form class="form-inline">
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-fullscreen-sm-down">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <p class="modal-title"> <strong> Participantes  </strong> </p>
                </div>
                <div class="modal-body">


                    {{-- <p>Participantes</p> --}}
                    <div class="tabla-class">
                    
                        <table class="table table-bordered" id="tabla-participantes" style="text-align: left">
                            <thead>
                                <tr>
                                    <th class="title-color">ID</th>
                                    <th class="title-color">Clave</th>
                                    <th class="title-color">Nombre</th>
                                    {{-- <th class="title-color">Eliminar</th> --}}
                                </tr>
                            </thead>
                            <tbody id="participantes-body" >

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                </div>
            </div>

        </div>
    </div>
</form>
