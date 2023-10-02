<?php include_once 'Views/template/header.php'?>
    <div class="container">
        <div class="col-md-12">
            <button class="btn btn-primary mb-3" id="btnNuevo" type="button">
                <i class="material-icons">
                    add
                </i>Nuevo</button>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered display nowrap text-center" style="width:100%" id="tdlPersonalAcceso">
                                <thead>
                                    <tr >
                                        <th style="text-align: center">Id</th>
                                        <th style="text-align: center">Usuario</th>
                                        <th style="text-align: center">Persona</th>
                                        <th style="text-align: center">Programa</th>
                                        <th style="text-align: center">Rol</th>
                                        <th style="text-align: center">Fecha </th>
                                        <th style="text-align: center">Estado </th>
                                        <th style="text-align: center">Acciones </th>
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
    <div id="modalRegistro" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title"></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <form id="formulario" autocomplete="off">
                <input type="hidden" id="id_personalAcceso" name="id_personalAcceso">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label for="usuario">Usuario</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                    <i class="material-icons">
                                        person
                                    </i>
                                    </span>
                                    <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="clave">Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text" >
                                    <i class="material-icons">
                                        key
                                    </i>
                                    </span>
                                    <input class="form-control" type="password" id="clave" name="clave" placeholder=" Digite Contraseña" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="confirmar">Confirmar</label>
                                <div class="input-group">
                                    <span class="input-group-text" >
                                    <i class="material-icons">
                                        key
                                    </i>
                                    </span>
                                    <input class="form-control" type="password" id="confirmar" name="confirmar" placeholder="Confirme Contraseña " >
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                        <label for="personaAsignada">Persona Asignada:</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                military_tech
                                                </i>
                                            </span>
                                            <select id="personaAsignada" class="form-control" name="personaAsignada">
                                                <option selected>SELECCIONAR</option>
                                                <?php foreach($data['personas'] as $row){?>
                                                <option value="<?php  echo $row['id']?>"><?php  echo $row['nombres']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                        <label for="programa">Programa:</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                military_tech
                                                </i>
                                            </span>
                                            <select id="programa" class="form-control" name="programa">
                                                <option selected>SELECCIONAR</option>
                                                <?php foreach($data['programas'] as $row){?>
                                                <option value="<?php  echo $row['id']?>"><?php  echo $row['nombres']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                            </div>
                            
                            <div class="col-md-12 mb-4">
                                <label for="rol">Rol</label>
                                <div class="input-group">
                                    <span class="input-group-text" >
                                    <i class="material-icons">
                                        badge
                                    </i>
                                    </span>
                                    <select name="rol" id="rol" class="form-control" >
                                        <option value="SELECCIONAR">SELECCIONAR</option>
                                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                        <option value="PERSONALSALUD">PERSONAL DE SALUD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">
                        <i class="material-icons">
                            save
                        </i>Registrar</button>
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