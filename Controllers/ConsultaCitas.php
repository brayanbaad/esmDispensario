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
                if ($data[$i]['estado']==1) {
                    $data[$i]['estado']='<span class="badge badge-warning">Pendiente</span>';
                    $data[$i]['acciones']='
                        <div>
                        <a href ="#" class="btn btn-primary btn-sm" onclick="Editar('.$data[$i]['id'].');"><i class="material-icons">edit</i>Editar</a>
                        </div>';
                }else{
                    $data[$i]['estado']='<span class="badge badge-success">Confirmada</span>';
                    $data[$i]['acciones']='
                        <div>
                        <button class="btn btn-success" type="button" onclick="Editar('.$data[$i]['id'].');"><i class="material-icons">recycling</i>Editar</i></button>
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
    } 
?>