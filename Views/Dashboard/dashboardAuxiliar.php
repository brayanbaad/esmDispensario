<?php include_once 'Views/template/header.php'?>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary">
                <div class="card-body d-flex text-white justify-content-between">
                    Pacientes
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-primary ">
                    <span class="text-white"><?php echo $data['pacientes']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary">
                <div class="card-body d-flex text-white justify-content-between">
                    Pacientes
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-primary ">
                    <span class="text-white"><?php echo $data['pacientes']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
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
    </div>
    
        
    
<?php include_once 'Views/template/footer.php'?>