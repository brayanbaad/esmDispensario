<?php include_once 'Views/template/header.php'?>
    <div class="container">
        <div class="col-md-12">
            <button class="btn btn-primary mb-4" id="btnNuevo" type="button">
                <i class="material-icons">
                    add
                </i>Nuevo</button>
                <div class="card ">
                    <div class="card-body"  >
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered display nowrap text-center " style="width:100%" id="tdlPersonalDispensario">
                                <thead class="">
                                    <tr>
                                        <th style="text-align: center ">Identificacion:</th>
                                        <th style="text-align: center">Acciones:</th>
                                        <th style="text-align: center">Apellidos:</th>
                                        <th style="text-align: center">Nombres:</th>
                                        <th style="text-align: center">Grado</th>
                                        <th style="text-align: center">Seccion:</th>
                                        <th style="text-align: center">Fecha Nacimiento:</th>
                                        <th style="text-align: center">Correo</th>
                                        <th style="text-align: center">Telefono:</th>
                                        <th style="text-align: center">Especialidad</th>
                                        <th style="text-align: center">Arma:</th>
                                        <th style="text-align: center">Novedad:</th>
                                        <th style="text-align: center">Item</th>
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
        </div>
    <div id="modalRegistro" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info ">
                    <h5 class="modal-title text-white " id="title"></h5>
                    <button class="btn-close " data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form id="formulario" autocomplete="off">
                    <input type="hidden" id="id_personalDispensario" name="id_personalDispensario">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="grado">Grado: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                            <i class="material-icons">
                                            military_tech
                                            </i>
                                            </span>
                                            <select id="grado"  class="form-control" name="grado">
                                                <option selected>SELECCIONAR</option>
                                                <?php foreach($data['grados'] as $row){?>
                                                <option value="<?php  echo $row['id']?>"><?php  echo $row['nombreCorto']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="identificacion">Identificacion: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                    badge
                                                </i>
                                            </span>
                                            <input class="form-control" type="number" id="identificacion" name="identificacion" placeholder="Identificacion" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="fecha">Fecha De Nacimiento: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                    today
                                                </i>
                                            </span>
                                            <input value="<?php echo date('Y-m-d')?>" class="form-control" type="date" id="fecha" name="fecha" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="apellidos">Apellidos: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                    group
                                                </i>
                                            </span>
                                            <input class="form-control" type="text" id="apellidos" name="apellidos" placeholder="Apellidos" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="nombres">Nombres: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                    person
                                                </i>
                                            </span>
                                            <input class="form-control" type="text" id="nombres" name="nombres" placeholder="Nombres" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="telefono">Telefono: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                    call
                                                </i>
                                            </span>
                                            <input class="form-control" type="number" id="telefono" name="telefono" placeholder="Telefono" >
                                        </div>
                                    </div>  
                                    <div class="col-md-4 mb-2">
                                        <label for="correo">Correo: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                    mail
                                                </i>
                                            </span>
                                            <input class="form-control" type="email" id="correo" name="correo" placeholder="sanidadMil@gmail.com" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="especialidad">Especialidad: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                            <i class="material-icons">
                                                co_present
                                            </i>
                                            </span>
                                            <select id="especialidad" class="form-control" name="especialidad">
                                                <option selected>SELECCIONAR</option>
                                                <?php foreach($data['especialidades'] as $row){?>
                                                <option value="<?php  echo $row['id']?>"><?php  echo $row['nombre']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="arma">Arma: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                            <i class="material-icons">
                                                diversity_3
                                            </i>
                                            </span>
                                            <select id="arma" class="form-control"  name="arma">
                                                <option selected>SELECCIONAR</option>
                                                <?php foreach($data['armas'] as $row){?>
                                                <option value="<?php  echo $row['id']?>"><?php  echo $row['nombre']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <label for="seccion">Seccion: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                            <i class="material-icons">
                                                lan
                                            </i>
                                            </span>
                                            <select id="seccion"  class="form-control" name="seccion">
                                                <option selected>SELECCIONAR</option>
                                                <?php foreach($data['secciones'] as $row){?>
                                                <option value="<?php  echo $row['id']?>"><?php  echo $row['nombre']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="novedad">Novedad: <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="material-icons">
                                                    article
                                                </i>
                                            </span>
                                            <textarea class="form-control" type="text" id="novedad" name="novedad" rows="3" placeholder=""></textarea>
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
                        </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once 'Views/template/footer.php'?>




