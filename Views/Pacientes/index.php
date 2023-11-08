<?php include_once 'Views/template/header.php'?>
    <div class="container">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body"  >
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered display nowrap text-center " style="width:100%" id="tblPacientes">
                                <thead class="">
                                    <tr>
                                        <th style="text-align: center ">Identificacion:</th>
                                        <th style="text-align: center">Acciones:</th>
                                        <th style="text-align: center">Apellidos:</th>
                                        <th style="text-align: center">Nombres:</th>
                                        <th style="text-align: center ">Direccion:</th>
                                        <th style="text-align: center ">Telefono:</th>
                                        <th style="text-align: center ">N. Educativo:</th>
                                        <th style="text-align: center ">Ocupacion:</th>
                                        <th style="text-align: center">Edad:</th>
                                        <th style="text-align: center ">Item:</th>
                                        <th style="text-align: center">Fecha Ingreso:</th>
                                        <th style="text-align: center">Estado:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
        </div>   
        <div id="modalRegistro" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary  ">
                        <h5 class="modal-title text-white " id="title"></h5>
                        <button class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form id="formulario" autocomplete="off">
                        <input type="hidden" id="id_paciente" name="id_paciente">
                            <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <label for="fecha">Fecha De Ingreso A Ruta:</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="material-icons">today</i></span>
                                                <input value="<?php echo date('Y-m-d')?>" class="form-control" type="date" id="fecha" name="fecha" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label for="tipoIdentificacion">Tipo Identificacion:</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="material-icons"> badge</i></span>
                                                <select name="tipoIdentificacion" id="tipoIdentificacion"  name="tipoIdentificacion"class="form-control" >
                                                    <option value="SELECCIONAR">SELECCIONAR</option>
                                                    <option value="CC">CC</option>
                                                    <option value="TI">TI</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label for="identificacion">Numero Identificacion</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="material-icons">person</i></span>
                                                <input class="form-control" type="number" id="identificacion" name="identificacion" placeholder="Digite Numero" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="apellidos">Apellidos:</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                <i class="material-icons"> person</i></span>
                                                <input class="form-control" type="text" id="apellidos" name="apellidos" placeholder=" Digite Apellidos" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="nombres">Nombres:</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="material-icons">person</i></span>
                                                <input class="form-control" type="text" id="nombres" name="nombres" placeholder="Digite Nombres" >
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-2">
                                            <label for="fechaNacimiento">Fecha De Nacimiento:</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="material-icons">today</i>
                                                </span>
                                                <input value="<?php echo date('Y-m-d'); ?>" class="form-control" type="date" id="fechaNacimiento"  name="fechaNacimiento" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4" >
                                            <label for="edad">Edad</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                <i class="material-icons">
                                                    person
                                                </i>
                                                </span>
                                                <input class="form-control" type="number" id="edad" name="edad" placeholder="Edad" readonly="" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label for="telefono">Telefono:</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                <i class="material-icons">
                                                    person
                                                </i>
                                                </span>
                                                <input class="form-control" type="number" id="telefono" name="telefono" placeholder="Numero Telefono" >
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-4">
                                            <label for="direccion">Direccion:</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                <i class="material-icons">
                                                    person
                                                </i>
                                                </span>
                                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="nivelEducativo">Nivel Educativo:</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                <i class="material-icons">
                                                    person
                                                </i>
                                                </span>
                                                <input class="form-control" type="text" id="nivelEducativo" name="nivelEducativo" placeholder="Nivel Educativo" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="ocupacion">Ocupacion:</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                <i class="material-icons">
                                                    person
                                                </i>
                                                </span>
                                                <input class="form-control" type="text" id="ocupacion" name="ocupacion" placeholder="Ocupacion" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-info" type="submit"><i class="material-icons">save</i>Guardar</button>
                                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><i class="material-icons">cancel</i>Cancelar</button>                               
                                    </div>
                            </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
    <?php include_once 'Views/template/footer.php'?>
    