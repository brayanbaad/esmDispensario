<?php
class Pacientes extends Controller
{
    public function __construct() {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        parent::__construct();
    }

    public function index()  {
        
            $data['title'] ='Gestión de Pacientes';
            $data['script'] ='pacientes.js';
            $this->views->getView($this,'index',$data);
        
    }
}

