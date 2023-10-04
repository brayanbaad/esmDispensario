<?php
class Secciones extends Controller
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
            $data['title'] ='Gestion De Secciones';
            $data['script'] ='secciones.js';
            $this->views->getView($this,'index',$data);
        } else {
            header('Location:'.BASE_URL.'Errors/permisos');
        }
        
    }

    public function listar(){
        $data= $this->model->getSecciones();
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
        $id_seccion =  $_POST['id_seccion'];
        if (empty($nombre)) {
            $res = array('tipo'=>'warning','mensaje'=>'EL CAMPO NOMBRE ES REQUERIDO');
        } else {
            if ($id_seccion =="") {
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,0);
                if (empty($verificarNombre)) {
                    $data = $this->model->registrar($nombre);
                    if ($data>0) {
                        $res = array('tipo'=>'success','mensaje'=>'LA SECCION FUE REGISTRADO CON EXITO');
                    }else {
                        $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR LA SECCION ');
                    }
                } else {
                    $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DE LA SECCION YA EXISTE');
                }
            }else{
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,$id_seccion);
            if (empty($verificarNombre)) {
                $data = $this->model->modificar($nombre,$id_seccion);
                if ($data ==1) {
                    $res = array('tipo'=>'success','mensaje'=>'LA SECCION FUE MODIFICADO CON EXITO');
                }else {
                    $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR LA SECCION');
                }
            } else {
                $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DE LA SECCION YA EXISTE');
            }
            }
            
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
        

    }

    public function eliminar($id) {
        $data = $this->model->eliminar($id);
        if ($data==1 ) {
            $res = array('tipo'=>'success','mensaje'=>'SECCION DESACTIVADA');
        }else {
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL DESACTIVAR LA SECCION');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar($id)  {
        $data = $this->model->getSeccion($id);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function activar($id) {
        $data = $this->model->accionSeccion(1,$id);
        if ($data==1) {
            $res = array('tipo'=>'success','mensaje'=>'SECCION ACTIVADA');
        }else{
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL ACTIVAR LA SECCION');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }


}