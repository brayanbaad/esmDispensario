<?php
class Home extends Controller{

    public function __construct() {
        session_start();
        if (!empty($_SESSION['activo'])) {
            header("location:". BASE_URL."Dashboard");
        }
        parent::__construct();
    }
    
        public function index(){
            $this->views->getView($this,"index");
        }

        public function salir(){
        session_destroy();
        header("location:".BASE_URL);
    }

    }
?>