<?php include_once 'Views/template/header.php'?>
<div class="col-md-8 mx-auto" >
    <div class="card">
        <div class="card-header">
            Asignar Permisos
        </div>
        <div class="card body">
            <form id="formulario">
                <div class="row">
                    <?php foreach ($data as $row){?>
                        <div class="col-md-4">
                            <label for=""><?php echo $row['permiso'];?></label><br>
                            <input type="checkbox">
                        </div>
                    <?php } ?>

                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'Views/template/footer.php'?>