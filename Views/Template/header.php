<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <title><?php echo $data['title'];?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.css';?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/pace/pace.css';?>" rel="stylesheet">

    <link href="<?php echo BASE_URL . 'Assets/css/main.css';?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/DataTables/datatables.min.css';?>" rel="stylesheet"/>
    <link href="<?php echo BASE_URL . 'Assets/css/estilos.css';?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/maincalendar.min.css';?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/custom.css';?>" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL . 'Assets/img/favicon.ico';?>">
</head>
<body >
    <?php 
    $fechamax = date('Y-M-D');
    ?>
    <div class="app align-content-stretch d-flex flex-wrap ">
        <div class="app-sidebar">
            <div class="logo bg-info">
                <a href="index.html" class="logo-icon"><span class="logo-text text-white"><?php echo $_SESSION['asignar'];?><br></span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="<?php echo BASE_URL . 'Assets/img/logo.png';?>">
                        <span class="user-info-text text-white "  ><?php echo $_SESSION['asignar'];?><br><span class="user-state-info"><?php echo $_SESSION['rol']?></span></span>
                        <span class="activity-indicator"></span>
                    </a>
                </div>
            </div>
            <div class="app-menu ">
                <?php 
                if($_SESSION['rol']=="ADMINISTRADOR"){
                    include_once 'Views/template/menuadmin.php';
                }else if($_SESSION['rol']=="PERSONALSALUD") {
                    include_once 'Views/template/menusalud.php';
                }else{
                    include_once 'Views/template/menuauxiliar.php';
                }?>
            </div>
        </div>
        <div class="app-container ">
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link " id="notificationsDropDown" href="#" data-bs-toggle="dropdown"><i class="material-icons">person</i><i class="material-icons">expand_more</i></a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown"  aria-labelledby="notificationsDropDown">
                                        <div class="notifications-dropdown-list "  >
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cambiarPass">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image" >
                                                        <span class="notifications-badge bg-info text-white mb-2">
                                                            <i class="material-icons"> key</i>
                                                        </span>
                                                        <div class="notifications-dropdown-item-text">
                                                            <p class="bold-notifications-text"> Cambiar Contraseña</p>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </a>
                                            <a href="<?php echo BASE_URL . 'home/salir'?>">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons">login</i>
                                                        </span>
                                                        <div class="notifications-dropdown-item-text">
                                                            <p class="bold-notifications-text">Cerrar Sesión</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">