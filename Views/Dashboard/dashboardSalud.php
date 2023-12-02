<?php include_once 'Views/template/header.php'?>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info">
                <div class="card-body d-flex text-white justify-content-between">
                    Pacientes
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
                    Citas De Hoy
                    <i class="material-icons ">free_cancellation</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-success ">
                    <span class="text-white"><?php echo $data['fechaHoy']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger">
                <div class="card-body d-flex text-white justify-content-between">
                    Citas Proxima
                    <i class="material-icons ">date_range</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-danger ">
                    <span class="text-white"><?php echo $data['fechaFuturas']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-8">
            <div class="card bg-warning">
                <div class="card-body d-flex text-white justify-content-between">
                    Citas Antiguas
                    <i class="material-icons ">event_busy</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-warning ">
                    <span class="text-white"><?php echo $data['fechaPasadas']['total']?></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                RANGO DE EDAD 
                </div>
                <div class="card-body ">
                    <canvas id="edades" width="100" height="100"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                CLASIFICACION DE RIESGO
                </div>
                <div class="card-body ">
                    <canvas id="clasificacion" ></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                CLASIFICACION DE SEMANAS GESTACIONAL
                </div>
                <div class="card-body ">
                    <canvas id="semanas" ></canvas>
                </div>
            </div>
        </div>
    </div>
    
<?php include_once 'Views/template/footer.php'?>