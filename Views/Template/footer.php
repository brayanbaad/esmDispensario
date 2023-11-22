</div>
            </div>
        </div>
    </div>
    <div id="cambiarPass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary  ">
                    <h5 class="modal-title text-white">Modificar Contraseña</h5>
                    <button class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                        
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmCambiarPass" onsubmit="frmCambiarPass(event);">
                        <div class="form-group mb-2">
                            <label for="claveActual">Contraseña Actual</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">save</i></span>
                                <input id="claveActual" class="form-control" type="password" name="claveActual" placeholder=" Contraseña Actual">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="claveNueva">Contraseña Nueva</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">save</i></span>
                                <input id="claveNueva" class="form-control" type="password" name="claveNueva" placeholder="Nueva Contraseña">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="claveConfirmar"> Confirmar Contraseña </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">save</i></span>
                                <input id="claveConfirmar" class="form-control" type="password" name="claveConfirmar" placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit"><i class="material-icons">save</i>Guardar</button>
                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><i class="material-icons">cancel</i>Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascripts -->
    <script src="<?php echo BASE_URL . 'Assets/plugins/jquery/jquery-3.5.1.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/pace/pace.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/apexcharts/apexcharts.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/main.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/moment.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/maincalendar.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/sweetalert@11.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/DataTables/datatables.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/chart.min.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/es.js';?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/custom.js';?>"></script>
    <script>
            const BASE_URL ="<?php echo BASE_URL; ?>";
    </script>
    <?php if(!empty($data['script'])) { ?>
    <script src="<?php echo BASE_URL . 'Assets/js/pages/'. $data['script'] ;?>"></script>
    <?php }?>
    <script src="<?php echo BASE_URL;?>Assets/js/pages/password.js"></script>
</body>
</html>