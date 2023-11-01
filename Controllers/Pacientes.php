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
    public function listar(){
        $data= $this->model->getPacientes();
        for ($i=0; $i < count($data) ; $i++) { 
            if ($data[$i]['estado']==1) {
                $data[$i]['estado']='<span class="badge badge-success"> ACTIVO</span>';
                $data[$i]['acciones']='
                <div>
                <a href ="'.BASE_URL.'Pacientes/detallePaciente/'.$data[$i]['id'].'" class="btn btn-info btn-sm" ;"><i class="material-icons"></i>Ver Paciente</a>
                </div>';
                
            }else{
                $data[$i]['estado']='<span class="badge badge-danger">DESACTIVADO</span>';
                $data[$i]['acciones']='
                <div>
                <a href ="#" class="btn btn-success btn-sm"  onclick="Activar('.$data[$i]['id'].');"><i class="material-icons">recycling</i>Activar</a>
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
        $data['title'] ='Detalle Del Paciente';
        $data['paciente'] = $this->model->getDetalles($id);
        $data['id_usuario'] = $id;
        $this->views->getView($this,"Pacientedetalle",$data);
    }

    public function detalles($id)
    {
        $data=$this->model->getDetalles($id);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }
}

