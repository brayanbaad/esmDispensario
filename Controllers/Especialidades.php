<?php
class Especialidades extends Controller
{
    public function __construct() {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        parent::__construct();
        
    }

    public function index()  {
        $id_user = $_SESSION['id_usuario'];
        $verificar = $this->model->verificarPermiso($id_user,'especialidades');
        if (!empty($verificar)) {
            $data['title'] ='Gestion De Especialidades';
        $data['script'] ='especialidades.js';
        $this->views->getView($this,'index',$data);
        } else {
            header('Location:'.BASE_URL.'Errors/permisos');
        }
        
    }

    public function listar(){
        $data= $this->model->getEspecialidades();
        for ($i=0; $i < count($data) ; $i++) { 
            if ($data[$i]['estado']==1) {
                $data[$i]['estado']='<span class="badge badge-success">ACTIVO</span>';
                $data[$i]['acciones']='
                    <div>
                    <a href ="#" class="btn btn-primary btn-sm" onclick="Editar('.$data[$i]['id'].');"><i class="material-icons">edit</i>Editar</a>
                    <a href ="#" class="btn btn-danger btn-sm"  onclick="Eliminar('.$data[$i]['id'].');"><i class="material-icons">delete</i>Desactivar</a>
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

    public function registrar(){
        $nombre = $_POST['nombre'];
        $nombre = strtoupper($nombre);
        $id_especialidad =  $_POST['id_especialidad'];
        if (empty($nombre)) {
            $res = array('tipo'=>'warning','mensaje'=>'EL CAMPO NOMBRE ES REQUERIDO');
        } else {
            if ($id_especialidad =="") {
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,0);
                if (empty($verificarNombre)) {
                    $data = $this->model->registrar($nombre);
                    if ($data>0) {
                        $res = array('tipo'=>'success','mensaje'=>'LA ESPECIALIDAD FUE REGISTRADA CON EXITO');
                    }else {
                        $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR LA ESPECIALIDAD');
                    }
                } else {
                    $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DE LA ESPECIALIDAD YA EXISTE');
                }
            }else{
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,$id_especialidad);
            if (empty($verificarNombre)) {
                $data = $this->model->modificar($nombre,$id_especialidad);
                if ($data ==1) {
                    $res = array('tipo'=>'success','mensaje'=>'LA ESPECIALIDAD FUE MODIFICADO CON EXITO');
                }else {
                    $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR LA ESPECIALIDAD');
                }
            } else {
                $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DE LA ESPECIALIDAD YA EXISTE');
            }
            }
            
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
        

    }

    public function eliminar($id) {
        $data = $this->model->eliminar($id);
        if ($data==1 ) {
            $res = array('tipo'=>'success','mensaje'=>'ESPECIALIDAD DESACTIVADA');
        }else {
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL DESACTIVAR EL ESPECIALIDAD');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar($id)  {
        $data = $this->model->getEspecialidad($id);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }
    public function activar($id) {
        $data = $this->model->accionEspecialidad(1,$id);
        if ($data==1) {
            $res = array('tipo'=>'success','mensaje'=>'ESPECIALIDAD ACTIVADA');
        }else{
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL ACTIVAR LA ESPECIALIDAD');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }


}