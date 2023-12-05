<?php include_once 'Views/template/header.php'?>
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card bg-primary">
                <div class="card-body d-flex text-white justify-content-between">
                    Citas Para Hoy
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-primary ">
                    <span class="text-white"><?php echo $data['fechaHoy']['total']?></span>
                </div>
            </div>
        </div>
        
        <div class="col-xl-6 col-md-6">
            <div class="card bg-warning">
                <div class="card-body d-flex text-white justify-content-between">
                    Citas Para Mañana
                    <i class="material-icons ">person</i>
                </div>
                <div class="card-footer d-flex  justify-content-center bg-warning ">
                    <span class="text-white"><?php echo $data['fechaMañana']['total']?></span>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                HORARIOS MAS TOMADOS
                </div>
                <div class="card-body ">
                    <canvas id="horas" ></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                FECHAS SELECCIONADAS
                </div>
                <div class="card-body ">
                    <canvas id="clasificacion" ></canvas>
                </div>
            </div>
        </div>
        
    </div>
    
        
    
<?php include_once 'Views/template/footer.php'?>