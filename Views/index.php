<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo BASE_URL . 'Assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'Assets/css/style.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    
    <title> Inicio De Sesion</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL . 'Assets/img/favicon.ico';?>">
</head>

<body>
    <img class="wave" src="Assets/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="Assets/img/doctor.svg">
        </div>
        <div class="login-content">
            <form id="formulario" autocomplete="off">
            <h3 class="title text-center ">ESTABLECIMIENTO DE SANIDAD MILITAR ESMBAS10</h3>
            <h2 class="title">BIENVENIDO</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Usuario</h5>
                    <input id="usuario" type="text" class="input" name="usuario">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" id="clave" class="input" name="clave">
                </div>
            </div>
            <div class="view">
                <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
            <button type="submit" class="btn btn-primary bg-info">Ingresar</button>
        </form>
        </div>
</div>
    <script src="<?php echo BASE_URL . 'Assets/js/fontawesome.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/main.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/main2.js'?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo BASE_URL .'Assets/js/sweetalert@11.js'; ?>"></script>
    <script src="<?php echo BASE_URL .'Assets/js/custom.js'; ?>"></script>
    <script>
        const BASE_URL = '<?php  echo BASE_URL;?>';
    </script>
    <script src="<?php echo BASE_URL .'Assets/js/pages/login.js'; ?>"></script>

</body>
</html>