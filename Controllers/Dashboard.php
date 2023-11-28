<?php
class Dashboard extends Controller
{
    public function __construct() {
        session_start();  
        parent::__construct();
    }

    public function index()  {
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        if ($_SESSION['rol']=="ADMINISTRADOR") {
            $data['title'] ='Dashboard Administrador';
            $data['script'] ='dashboard.js';
            $data['personalDispensario'] = $this->model->getDatos('personal_Dispensario');
            $data['usuarios'] = $this->model->getDatos('usuarios');
            $data['secciones'] = $this->model->getDatos('secciones');
            $data['especialidades'] = $this->model->getDatos('especialidades');
            $this->views->getView($this,'dashboardAdmin',$data);
        }else if ($_SESSION['rol']=="PERSONALSALUD") {
            $data['title'] ='Dashboard Personal Salud';
            $data['script'] ='pacientes.js';
            $data['pacientes'] = $this->model->getDatos('pacientes');
            $data['citas'] = $this->model->getFecha();
            $this->views->getView($this,'dashboardSalud',$data);
        }else{
            $data['title'] ='Dashboard Auxiliar';
            $data['script'] ='citas.js';
            $data['pacientes'] = $this->model->getDatos('pacientes');
            $data['citas'] = $this->model->getFecha();
            $this->views->getView($this,'dashboardAuxiliar',$data);
        }
    }


}