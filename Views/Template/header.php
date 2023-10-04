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
    <link href="<?php echo BASE_URL . 'Assets/css/custom.css';?>" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL . 'Assets/img/favicon.ico';?>">
</head>

<body >
    <div class="app align-content-stretch d-flex flex-wrap ">
        <div class="app-sidebar">
            <div class="logo bg-info">
                <a href="index.html" class="logo-icon"><span class="logo-text text-white"><?php echo $_SESSION['asignar'];?><br></span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <span class="user-info-text text-white"><?php echo $_SESSION['asignar'];?><br><span class="user-state-info"><?php echo $_SESSION['rol']?></span></span>
                        <img src="<?php echo BASE_URL . 'Assets/img/logo.png';?>">
                    </a>
                </div>
            </div>
            <div class="app-menu ">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Registros
                    </li>
                    
                    <li class="">
                        <a href="<?php echo BASE_URL .'pacientes'?>" class="active">
                            <i class="material-icons-two-tone">
                                person_4
                            </i>Pacientes
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL .'dashboard'?>" class="active">
                            <i class="material-icons-two-tone">
                                dashboard
                            </i>Dashboard
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL .'personalDispensario'?>" class="active">
                            <i class="material-icons-two-tone">
                                domain
                            </i>Personal Dispensario
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL .'usuarios'?>" class="active">
                            <i class="material-icons-two-tone">
                                admin_panel_settings
                            </i>Usuarios
                        </a>
                    </li>
                    <li class="sidebar-title">
                        Configuraciones
                        <li class="">
                            <a href="<?php echo BASE_URL . 'Grados'?>" class="active">
                                <i class="material-icons-two-tone  ">
                                    military_tech</i>Grados
                                </i>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo BASE_URL . 'Especialidades'?>" class="active">
                                <i class="material-icons-two-tone  ">
                                account_tree</i>Especialidades
                                </i>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo BASE_URL . 'Cargos'?>" class="active">
                                <i class="material-icons-two-tone ">
                                badge</i>Cargos
                                </i>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo BASE_URL . 'Secciones'?>" class="active">
                                <i class="material-icons-two-tone  ">
                                auto_awesome_motion</i>Secciones
                                </i>
                            </a>
                        </li>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL . 'Programas'?>" class="active">
                            <i class="material-icons-two-tone  ">
                                view_list</i>Programas
                            </i>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
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
                                    <a class="nav-link " id="notificationsDropDown" href="#" data-bs-toggle="dropdown"> <i class="material-icons">expand_more</i></a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                        <div class="">
                                            <a href=" <?php echo BASE_URL . 'home/salir'?>">
                                                <div class="notifications-dropdown-item">
                                                    <i class="material-icons-two-tone col-md-2">login</i>
                                                    Cerrar Sesion
                                                    
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