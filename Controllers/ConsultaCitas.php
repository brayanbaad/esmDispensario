<?php
    class ConsultaCitas extends Controller{

        public function __construct() {
            session_start();
            if (empty($_SESSION['activo'])) {
                header("location:". BASE_URL);
            }
            parent::__construct();
            
        }
        public function index(){
            
                $data['title'] =' Consulta De Citas';
                $data['script'] ='consultaCitas.js';
                $this->views->getView($this,'index',$data);
        }

        public function listar(){
            $data = $this->model->listarCitas();
            for ($i=0; $i < count($data) ; $i++) { 
                $data[$i]['description'] =  $data[$i]['title'].' '.  $data[$i]['description'];
                if ($data[$i]['estado']=="PENDIENTE") {
                    $data[$i]['estado']='<span class="badge badge-warning">Pendiente</span>';
                    $data[$i]['acciones']='
                        <div>
                        <a href ="#" class="btn btn-success btn-sm" onclick="ConfirmarEstado('.$data[$i]['id'].');"><i class="material-icons">check</i>Confirmar</a>
                        </div>';
                }else{
                    $data[$i]['estado']='<span class="badge badge-success">Confirmada</span>';
                    $data[$i]['acciones']='
                        <div>
                        <button class="btn btn-danger" type="button" onclick="DesconfirmarEstado('.$data[$i]['id'].');"><i class="material-icons">recycling</i>Desconfirmar</i></button>
                        </div>';
                }
            }
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function reporteHoras() {
            $data = $this->model->getHoras();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function confirmarEstado($id) {
            $data = $this->model->accionEditarEstado('CONFIRMADA',$id);
            if ($data==1) {
                $res = array('tipo'=>'success','mensaje'=>'CITA CONFIRMADA');
            }else{
                $res = array('tipo'=>'error','mensaje'=>'ERROR AL CONFIRMAR LA CITA');
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function desconfirmarEstado($id) {
            $data = $this->model->accionEditarEstado('PENDIENTE',$id);
            if ($data==1) {
                $res = array('tipo'=>'success','mensaje'=>'CITA DESCONFIRMADA');
            }else{
                $res = array('tipo'=>'error','mensaje'=>'ERROR AL DESCONFIRMAR LA CITA');
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }
    } 
?>