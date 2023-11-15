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
    
    <div id="myModal"class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white" id="titulo"></h5>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form id="formulario">
                    <div class="modal-body">
                        <!-- <div class="col-md-12 mb-2">
                            <label for="identificacion">Identificacion: </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">badge</i></span>
                                <input class="form-control" type="number" id="identificacion" name="identificacion" placeholder="Identificacion" >
                            </div>
                        </div> -->
                        <div class="col-md-12 mb-2">
                            <label for="start">Fecha: </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">badge</i></span>
                                <input class="form-control" type="date" id="start"  readonly="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="paciente">Paciente :</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">lan</i></span>
                                <select id="paciente"  class="form-control" name="paciente">
                                    <option selected>SELECCIONAR</option>
                                    <?php foreach($data['pacientes'] as $row){?>
                                    <option value="<?php  echo $row['id']?>"><?php  echo $row['nombres']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="color" id="color"  >
                            <label for="color" class="form-label">Color</label>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit"><i class="material-icons">save</i>Guardar</button>
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><i class="material-icons">cancel</i>Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include_once 'Views/template/footer.php'?>