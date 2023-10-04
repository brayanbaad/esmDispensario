<?php
class Programas extends Controller
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
        $verificar = $this->model->verificarPermiso($id_user,'programas');
        if (!empty($verificar)) {
            $data['title'] ='Gestión de Programas';
        $data['script'] ='programas.js';
        $this->views->getView($this,'index',$data);
        } else {
            header('Location:'.BASE_URL.'Errors/permisos');
        }
        
    }

    public function listar(){
        $data= $this->model->getProgramas();
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
        $id_programa =  $_POST['id_programa'];
        if (empty($nombre)) {
            $res = array('tipo'=>'warning','mensaje'=>'EL CAMPO NOMBRE ES REQUERIDO');
        } else {
            if ($id_programa =="") {
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,0);
                if (empty($verificarNombre)) {
                    $data = $this->model->registrar($nombre);
                    if ($data>0) {
                        $res = array('tipo'=>'success','mensaje'=>'PROGRAMA FUE REGISTRADO CON EXITO');
                    }else {
                        $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR EL PROGRAMA');
                    }
                } else {
                    $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL PROGRAMA YA EXISTE');
                }
            }else{
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,$id_programa);
            if (empty($verificarNombre)) {
                $data = $this->model->modificar($nombre,$id_programa);
                if ($data ==1) {
                    $res = array('tipo'=>'success','mensaje'=>'PROGRAMA FUE MODIFICADO CON EXITO');
                }else {
                    $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR EL PROGRAMA');
                }
            } else {
                $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL PROGRAMA YA EXISTE');
            }
            }
            
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
        

    }

    public function eliminar($id) {
        $data = $this->model->eliminar($id);
        if ($data==1 ) {
            $res = array('tipo'=>'success','mensaje'=>'PROGRAMA DESACTIVADO');
        }else {
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL DESACTIVAR EL PROGRAMA');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar($id)  {
        $data = $this->model->getPrograma($id);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }
    public function activar($id) {
        $data = $this->model->accionPrograma(1,$id);
        if ($data==1) {
            $res = array('tipo'=>'success','mensaje'=>'PROGRAMA ACTIVADO');
        }else{
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL ACTIVAR EL PROGRAMA');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }


}