<?php include_once 'Views/template/header.php'?>

<div class="col-md-8 mx-auto">
    <div class="card">
        <div class="card-header text-center bg-info text-white ">
            ASIGNAR PERMISOS
        </div>
        <div class="card-body">
            <form id="formularioPermiso">
                <div class="row">
                    <?php foreach ($data['datos'] as $row){?>
                        <div class="col-md-4 text-center text-capitalize p-3">
                            <label for=""><?php echo $row['permiso'];?></label><br>
                            <input type="checkbox" name="permisos[]" value="<?php echo $row['id'];?>">
                        </div>
                    <?php } ?>
                    <input type="hidden" value="<?php echo $data['id_usuario'];?>" name="id_usuario">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-info ">Asignar Permisos</button>
                    <a href="<?php echo BASE_URL;?>Usuarios" class="btn btn-danger">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
</div>
<?php include_once 'Views/template/footer.php'?>