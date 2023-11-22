<?php include_once 'Views/template/header.php'?>
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card calendar-container">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="myModal"class="modal fade bd-example-modal-lg" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white" id="titulo"></h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form id="formulario" autocomplete="off">
                <input type="hidden" id="id_cita" name="id_cita">
                <input value="<?php echo date('Y-m-d')?>" class="form-control" type="hidden" id="fechaHoy" name='fechaHoy'>
                
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="start">Fecha: </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="material-icons">badge</i></span>
                                    <input value="<?php echo date('Y-m-d')?>" class="form-control" type="date" id="start" name='start'>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="end"> Hora:</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="material-icons">
                                        military_tech
                                        </i>
                                    </span>
                                    <select id="end" class="form-control" name="end">
                                        <option selected>SELECCIONAR</option>
                                        <?php foreach($data['horarios'] as $row){?>
                                        <option value="<?php  echo $row['hora']?>"><?php  echo $row['hora']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="identificacion">Identificacion : </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="material-icons">badge</i></span>
                                    <input class="form-control" type="number" id="identificacion" name="identificacion" placeholder="Digite Identificacion" onkeyup="cargarDatos(event)" >
                                </div>
                            </div>
                            <input type="hidden" id="id_paciente" name="id_paciente">
                            <div class="col-md-6 mb-2">
                                <label for="title">Nombres : </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="material-icons">lan</i></span>
                                    <input class="form-control" type="text" id="title" name=' title' readonly="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="description">Apellidos : </label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="material-icons">lan</i></span>
                                    <input class="form-control" type="text" id="description" name=' description' readonly="">
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="color">Color : </label>
                                <div class="input-group">
                                    <span class="input-group-text"></span>
                                    <input class="form-control" type="color" id="color" name='color'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" id="btnModal" type="button" onclick="RegistrarCita(event)"> <i class="material-icons">save</i>Guardar</button>
                        <button class="btn btn-warning" id="btnEliminar" type="button"><i class="material-icons">delete</i>Eliminar</button>
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal"> <i class="material-icons">cancel</i>Cancelar</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    
<?php include_once 'Views/template/footer.php'?>