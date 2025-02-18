<?php include_once 'Views/template/header.php'?>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary">
                <div class="card-body d-flex text-white justify-content-between">
                    Personal Dispensario
                    <i class="material-icons ">groups</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-primary ">
                    <span class="text-white"><?php echo $data['personalDispensario']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success">
                <div class="card-body d-flex text-white justify-content-between">
                    Personal De Acceso
                    <i class="material-icons ">lock_person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-success ">
                    <span class="text-white"><?php echo $data['usuarios']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning">
                <div class="card-body d-flex text-white justify-content-between">
                    Areas
                    <i class="material-icons ">apps</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-warning ">
                    <span class="text-white"><?php echo $data['secciones']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger">
                <div class="card-body d-flex text-white justify-content-between">
                    Especialidades
                    <i class="material-icons ">co_present</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-danger ">
                    <span class="text-white"><?php echo $data['especialidades']['total']?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                PORCENTAJE GRADOS 
                </div>
                <div class="card-body ">
                    <canvas id="personal" width="80" height="80"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                CANTIDAD ESPECIALIDADES 
                </div>
                <div class="card-body ">
                    <canvas id="usuarios" width="80" height="80"></canvas>
                </div>
            </div>
        </div>
    </div>
        
    
<?php include_once 'Views/template/footer.php'?>