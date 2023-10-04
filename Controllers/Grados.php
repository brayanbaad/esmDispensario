<?php
class Grados extends Controller
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
        $verificar = $this->model->verificarPermiso($id_user,'grados');
        if (!empty($verificar)) {
            $data['title'] ='Gestion De Grados';
            $data['script'] ='grados.js';
            $this->views->getView($this,'index',$data);
        } else {
            header('Location:'.BASE_URL.'Errors/permisos');
        }
        
    }

    public function listar(){
        $data= $this->model->getGrados();
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
        $nombreCorto = $_POST['nombreCorto'];
        $nombre = strtoupper($nombre);
        $nombreCorto = strtoupper($nombreCorto);
        $id_grado =  $_POST['id_grado'];
        if (empty($nombre) || empty($nombreCorto)) {
            $res = array('tipo'=>'warning','mensaje'=>'LOS CAMPOS SON OBLIGATORIOS');
        } else {
            if ($id_grado =="") {
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,0);
                if (empty($verificarNombre)) {
                    $verificarNombreCorto= $this->model->getVerificar('nombreCorto', $nombreCorto,0);
                    if (empty($verificarNombreCorto)) {
                        $data = $this->model->registrar($nombre,$nombreCorto);
                        if ($data>0) {
                            $res = array('tipo'=>'success','mensaje'=>'EL GRADO FUE REGISTRADO CON EXITO');
                        }else {
                            $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR EL GRADO');
                        }
                    } else {
                        $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE CORTO DEL GRADO YA EXISTE');
                    }
                } else {
                    $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL GRADO YA EXISTE');
                }
            }else{
                $verificarNombre= $this->model->getVerificar('nombre', $nombre,$id_grado);
            if (empty($verificarNombre)) {
                $verificarNombreCorto= $this->model->getVerificar('nombreCorto', $nombreCorto,$id_grado);
                if (empty($verificarNombreCorto)) {
                    $data = $this->model->modificar($nombre,$nombreCorto,$id_grado);
                    if ($data ==1) {
                        $res = array('tipo'=>'success','mensaje'=>'EL GRADO FUE MODIFICADO CON EXITO');
                    }else {
                        $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR EL GRADO');
                    }
                } else {
                    $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL GRADO YA EXISTE');
                }
                
            } else {
                $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL GRADO YA EXISTE');
            }
            }
            
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
        

    }

    public function eliminar($id) {
        $data = $this->model->eliminar($id);
        if ($data==1 ) {
            $res = array('tipo'=>'success','mensaje'=>'GRADO DESACTIVADO');
        }else {
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL DESACTIVAR EL GRADO');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar($id)  {
        $data = $this->model->getGrado($id);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }
    public function activar($id) {
        $data = $this->model->accionGrado(1,$id);
        if ($data==1) {
            $res = array('tipo'=>'success','mensaje'=>'GRADO ACTIVADO');
        }else{
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL ACTIVAR EL GRADO');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }


}