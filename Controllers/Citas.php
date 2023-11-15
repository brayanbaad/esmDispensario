<?php
class Citas extends Controller{

        public function __construct() {
            session_start();
            if (empty($_SESSION['activo'])) {
                header("location:". BASE_URL);
            }
            parent::__construct();
            
        }
        public function index(){
                $id_user = $_SESSION['id_usuario'];
                $data['title'] =' Gestion De Citas';
                $data['pacientes'] = $this->model->getPacientes();
                $data['script'] ='citas.js';
                $this->views->getView($this,'index',$data);
        }
    }
?>