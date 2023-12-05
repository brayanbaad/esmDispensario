<?php include_once 'Views/template/header.php'?>

<form action="<?php echo BASE_URL.'Detalles/pdf/';?> " method="POST" target="_blank">
    <div class="container ">
        <div class="card ">
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="desde">Desde</label>
                            <input type="date" value="<?php echo date('Y-m-d');?>" id="desde" name="desde" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="hasta">Hasta</label>
                            <input type="date" value="<?php echo date('Y-m-d');?>" id="hasta" name="hasta" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <button class="btn btn-info"  type="submit" ><i class="material-icons">description</i> Generar PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered display nowrap text-center" style="width:100%" id="tdlDetalles">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Identificacion</th>
                                        <th style="text-align: center">Apellidos</th>
                                        <th style="text-align: center">Nombres</th>
                                        <th style="text-align: center">Riesgo Obstetrico: </th>
                                        <th style="text-align: center">Fecha Namiento: </th>
                                        <th style="text-align: center">Edad: </th>
                                        <th style="text-align: center">Telefono :</th>
                                        <th style="text-align: center">Item: </th>
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
<?php include_once 'Views/template/footer.php'?>