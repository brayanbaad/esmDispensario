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

        public function registrar(){
            $start = $_POST['start'];
            $end = $_POST['end'];
            $id = $_POST['identificacion'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $color = $_POST['color'];
            $id_cita =  $_POST['id_cita'];
            if (empty($title) ||  empty($description) ||  empty($id)){
                $res = array('tipo'=>'warning','mensaje'=>'LOS CAMPOS SON REQUERIDOS');
            }else {
                $data = $this->model->registrar($start,$end,$id,$title,$description,$color);
                    if ($data>0) {
                        $res = array('tipo'=>'success','mensaje'=>'LA CITA FUE REGISTRADA CON EXITO');
                    }else {
                        $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR LA CITA');
                    }
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function modificar(){
            $start = $_POST['start'];
            $end = $_POST['end'];
            $id = $_POST['identificacion'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $color = $_POST['color'];
            $id_cita =  $_POST['id_cita'];
            if (empty($title) ||  empty($description) ||  empty($id)){
                $res = array('tipo'=>'warning','mensaje'=>'LOS CAMPOS SON REQUERIDOS');
            }else {
                $data = $this->model->modificar($start,$end,$id,$title,$description,$color);
                    if ($data>0) {
                        $res = array('tipo'=>'success','mensaje'=>'LA CITA FUE REGISTRADA CON EXITO');
                    }else {
                        $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR LA CITA');
                    }
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }



        public function listar(){
            $data = $this->model->listarCitas();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function cargarDatos($id) {
            $data = $this->model->DatosPaciente($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }


    }
?>