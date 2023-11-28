<?php include_once 'Views/template/header.php'?>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info">
                <div class="card-body d-flex text-white justify-content-between">
                    Cantidad De Pacientes
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-info ">
                    <span class="text-white"><?php echo $data['pacientes']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success">
                <div class="card-body d-flex text-white justify-content-between">
                    Citas Para Hoy
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-success ">
                    <span class="text-white"><?php echo $data['citas']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger">
                <div class="card-body d-flex text-white justify-content-between">
                    Citas Para Mañana
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-danger ">
                    <span class="text-white">12</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning">
                <div class="card-body d-flex text-white justify-content-between">
                    Citas Antiguas
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-warning ">
                    <span class="text-white">12</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                RANGO DE EDAD 
                </div>
                <div class="card-body ">
                    <canvas id="personal" width="100" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                Usuarios 
                </div>
                <div class="card-body ">
                    <canvas id="usuarios" width="100" height="100"></canvas>
                </div>
            </div>
        </div>
<?php include_once 'Views/template/footer.php'?>