<?php
    class Detalles extends Controller{

        public function __construct() {
            session_start();
            if (empty($_SESSION['activo'])) {
                header("location:". BASE_URL);
            }
            parent::__construct();
            
        }
        public function index(){
            
                $data['title'] =' Consulta De Pacientes';
                $data['script'] ='detalles.js';
                $this->views->getView($this,'index',$data);
        }

        public function listar() {
            $data= $this->model->getPacientes();
        for ($i=0; $i < count($data) ; $i++) { 
            if ($data[$i]['estado']==1) {
                $data[$i]['estado']='<span class="badge badge-success">ACTIVO</span>';
                $data[$i]['acciones']='
                    <div>
                    <a href ="'.BASE_URL.'/Detalles/detallePaciente/'.$data[$i]['id'].'" class="btn btn-primary btn-sm" ">Ver Paciente</a>
                    </div>';
            }else{
                $data[$i]['estado']='<span class="badge badge-danger">DESACTIVADO</span>';
                $data[$i]['acciones']='
                    <div>
                    <button class="btn btn-success" type="button" onclick="Activar('.$data[$i]['id'].');"><i class="material-icons">recycling</i>Activar</i></button>
                    </div>';
            }
        }
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
            
        }

        public function detallePaciente($id){
            if (empty($_SESSION['activo'])) {
                header("location:". BASE_URL);
            }
            $data['title'] ='Detalles Del Paciente';
            $paciente = $this->model->getDetallePaciente($id);
            $data['paciente']=array();
            foreach($paciente as $valor){
                $data['paciente']= $valor;
            }
           
            $this->views->getView($this,"detallePaciente",$data);
        }
    } 
?>