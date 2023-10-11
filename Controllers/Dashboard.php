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
            $this->views->getView($this,'dashboardAdmin',$data);
        }else {
            $data['title'] ='Dashboard Personal Salud';
            $this->views->getView($this,'dashboardSalud',$data);
        }
    }


}