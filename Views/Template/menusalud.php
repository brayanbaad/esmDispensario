<ul class="accordion-menu" >
<li class="sidebar-title">
        Maternidad
    </li>
    <li >
        <a href="<?php echo BASE_URL .'dashboard'?>" class="active">
            <i class="material-icons-two-tone">
            dashboard
            </i>Dashboard
        </a>
    </li>
    <li class="sidebar-title">
        PACIENTE
    </li>
    <li >
        <a href="<?php echo BASE_URL .'RegistroPaciente'?>" class="active">
            <i class="material-icons-two-tone">
            person_add
            </i> Nuevo Paciente
        </a>
    </li>
    <li >
        <a href="<?php echo BASE_URL .'pacientes'?>" class="active" disabled>
            <i class="material-icons-two-tone">
            dataset
            </i> Consultar Pacientes 
        </a>
    </li>
    <li >
        <a href="<?php echo BASE_URL .'pacientes'?>" class="active" disabled >
            <i class="material-icons-two-tone">
            edit_calendar
            </i> Proximas Citas
        </a>
    </li>
    
    <li class="sidebar-title">
        INFORMES
    </li>
    <li>
        <a href="<?php echo BASE_URL .'consultar'?>" class="active">
            <i class="material-icons-two-tone">
            devices_fold
            </i>Reportes
        </a>
    </li>
    <!-- <li>
    <div class="col-xl-12 col-md-6">
            <div class="card bg-warning">
                <div class="card-body d-flex text-white">
                <input value="<?php echo date('Y-m-d')?>" class="form-control" type="date" readonly="" >
                </div>
            </div>
        </div>
    </li> -->
</ul>