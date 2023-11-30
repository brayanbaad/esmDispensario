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

                $data['title'] =' Gestion De Citas';
                $data['horarios'] = $this->model->getHorarios();
                $data['script'] ='citas.js';
                $this->views->getView($this,'index',$data);
        }

        public function registrar(){
            $id =  $_POST['id_cita'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $id_paciente = $_POST['id_paciente'];
            $color = $_POST['color'];
            $fechaHoy =  $_POST['fechaHoy'];
            if ($start < $fechaHoy){
                $res = array('tipo'=>'warning','mensaje'=>'LA FECHA SELECCIONADA ES INVALIDA');
            }else {
                if ($id=="") {
                    $verificardatos = $this->model->getVerificar('start',$start,'end',$end,0);
                    if (empty($verificardatos)) {
                        $data = $this->model->registrar($start,$end,$id_paciente,$color);
                        if ($data>0) {
                            $res = array('tipo'=>'success','mensaje'=>'LA CITA FUE REGISTRADA CON EXITO');
                        }else {
                            $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR LA CITA');
                        }
                    } else {
                        $res = array('tipo'=>'error','mensaje'=>'LA HORA SELECCIONADA YA ESTÁ AGENDADA');
                    }
                } else {
                    $verificardatos = $this->model->getVerificar('start',$start,'end',$end,$id);
                    if (empty($verificardatos)) {
                        $data = $this->model->modificar($start,$end,$id_paciente,$color,$id);
                        if ($data>0) {
                            $res = array('tipo'=>'success','mensaje'=>'LA CITA FUE MODIFICADA CON EXITO');
                        }else {
                            $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR LA CITA');
                        }
                        $res = array('tipo'=>'error','mensaje'=>'LA HORA SELECCIONADA YA ESTÁ AGENDADA, SELECCIONE OTRA POR FAVOR');
                    }
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
        public function eliminar($id){
            $data = $this->model->eliminar($id);
            if ($data>0) {
                $res = array('tipo'=>'success','mensaje'=>'LA CITA FUE ELIMINADA CON EXITO');
            }else {
                $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR LA CITA');
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }
        public function drop(){
            $id =  $_POST['id'];
            $start = $_POST['start'];
            $data = $this->model->drop($id,$start);
            if ($data>0) {
                $res = array('tipo'=>'success','mensaje'=>'LA CITA FUE MODIFICADA CON EXITO');
            }else {
                $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR LA CITA');
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }
        public function cargarDatos($id) {
            $data = $this->model->DatosPaciente($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }


        

    }
?>