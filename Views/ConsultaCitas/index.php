<?php include_once 'Views/template/header.php'?>
<div class="container">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered display nowrap text-center" style="width:100%" id="tdlCitas">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Identificacion</th>
                                        <th style="text-align: center">Apellidos</th>
                                        <th style="text-align: center">Nombres</th>
                                        <th style="text-align: center">Fecha: </th>
                                        <th style="text-align: center">Hora: </th>
                                        <th style="text-align: center">Estado</th>
                                        <th style="text-align: center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
            </div>   
    </div>
    <div id="modalEstado" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white"  id="title"></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <form id="formularioEstado" autocomplete="off">
                    <input type="hidden" id="id_citaEstado" name="id_citaEstado">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="ESTADO">ESTADO</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="material-icons">
                                        person
                                    </i>
                                    </span>
                                    <select name="ESTADO" id="ESTADO" class="form-control" >
                                        <option value="PENDIENTE">PENDIENTE</option>
                                        <option value="CONFIRMAR">CONFIRMAR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">
                        <i class="material-icons">
                            save
                        </i>Guardar</button>
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal" >
                        <i class="material-icons">
                            cancel
                        </i>Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include_once 'Views/template/footer.php'?>