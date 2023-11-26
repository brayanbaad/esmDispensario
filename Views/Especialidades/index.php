<?php include_once 'Views/template/header.php'?>
    <div class="container">
        <div class="col-md-12">
            <button class="btn btn-primary mb-4" id="btnNuevo" type="button">
                <i class="material-icons">
                    add
                </i>Nuevo</button>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered display nowrap text-center" style="width:100%" id="tdlEspecialidades">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Id</th>
                                        <th style="text-align: center">Nombre</th>
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
    <div id="modalRegistro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"  id="title"></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <form id="formulario" autocomplete="off">
                    <input type="hidden" id="id_especialidad" name="id_especialidad">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="nombre">Nombre</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="material-icons">
                                        person
                                    </i>
                                    </span>
                                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" >
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