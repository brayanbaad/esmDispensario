<?php
class Usuarios extends Controller{
    
    public function __construct(){
        session_start();
        parent::__construct();
    }
    public function index(){
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        $data['programas'] = $this->model->getProgramas();
        $data['personal'] = $this->model->getPersonas();
        $data['title'] ='Gestion De Usuarios';
        $data['script'] ='usuarios.js';
        $this->views->getView($this,"index",$data);
    }

    public function listar(){
        $data= $this->model->getUsuarios();
        for ($i=0; $i < count($data) ; $i++) { 
            if ($data[$i]['estado']==1) {
                $data[$i]['estado']='<span class="badge badge-success">ACTIVO</span>';
                $data[$i]['acciones']='
                    <div>
                <a href ="'.BASE_URL.'Usuarios/permisos/'.$data[$i]['id'].'" class="btn btn-dark btn-sm";"><i class="material-icons">key</i></a>
                <a href ="#" class="btn btn-info btn-sm" onclick="Editar('.$data[$i]['id'].');"><i class="material-icons">edit</i></a>
                <a href ="#" class="btn btn-danger btn-sm"  onclick="Eliminar('.$data[$i]['id'].');"><i class="material-icons">delete</i></a>
                    </div>';
            }else{
                $data[$i]['estado']='<span class="badge badge-danger">DESACTIVADO</span>';
                $data[$i]['acciones']='
                    <div>
                    <button class="btn btn-success" type="button" onclick="Activar('.$data[$i]['id'].');"><i class="material-icons">recycling</i>Activar</button>
                    </div>';
            }
        }
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function validar(){
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $res = array('tipo' =>'error','mensaje'=>'TODOS LOS CAMPOS SON REQUERIDOS');
        }else {
            $usuario = $_POST['usuario'];
            $usuario = strtoupper($usuario);
            $clave = $_POST['clave'];
            $hash = hash('SHA256',$clave);
            $data= $this->model->getUsuario($usuario,$hash);
            if ($data) {
                $_SESSION['id_usuario']=$data['id'];
                $_SESSION['asignar']=$data['usuario'];
                $_SESSION['activo']= true;
                $res = array('tipo' =>'success','mensaje'=>'BIENVENIDO AL SISTEMA DEL ESTABLECIMIENTO DE SANIDAD ESMBAS10');
            }else {
                
                $res = array('tipo' =>'warning','mensaje'=>' USUARIO O CONTRASEÑA ES INCORRECTA');
            }
        }
        echo json_encode($res, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        $persona = $_POST['persona'];
        $usuario = $_POST['usuario'];
        $usuario = strtoupper($usuario);
        $clave = $_POST['clave'];
        $confirmar = $_POST['confirmar'];
        $programa = $_POST['programa'];
        $id_usuario = $_POST['id_usuario'];
        $hash = hash("SHA256",$clave);
        if (empty($usuario)|| empty($persona) || empty($programa)) {
            $res = array('tipo'=>'warning','mensaje'=>'TODOS LOS CAMPOS SON REQUERIDOS');
        }else{
            if ($id_usuario=="") {
                if ($clave!= $confirmar) {
                    $res = array('tipo'=>'warning','mensaje'=>'LAS CONTRASEÑAS NO COINCIDEN');
                }else{
                    $verificarUsuario= $this->model->getVerificar('usuario', $usuario,0);
                    if (empty($verificarUsuario)) {
                        $data = $this->model->RegistrarUsuario($usuario,$persona,$hash,$programa);
                        if ($data>0) {
                            $res = array('tipo'=>'success','mensaje'=>'EL USUARIO FUE REGISTRADO CON EXITO');
                        }else {
                            $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR EL USUARIO');
                        }
                    } else {
                        $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL USUARIO YA EXISTE');
                    }
                }
            }else{
                $verificarUsuario= $this->model->getVerificar('usuario', $usuario,$id_usuario);
                if (empty($verificarUsuario)) {
                    $data = $this->model->ModificarUsuario($usuario,$persona,$programa,$id_usuario);
                    if ($data ==1) {
                        $res = array('tipo'=>'success','mensaje'=>'EL USUARIO FUE MODIFICADO CON EXITO');
                    }else {
                        $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR EL USUARIO');
                    }
                } else {
                    $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL USUARIO YA EXISTE');
                }
            }
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editar($id)
    {
        $data=$this->model->getEditar($id);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminar($id)
    {
        $data = $this->model->eliminar($id);
        if ($data==1 ) {
            $res = array('tipo'=>'success','mensaje'=>'USUARIO ELIMINADO');
        }else {
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL ELIMINAR EL USUARIO');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function activar($id) {
        $data = $this->model->accionUsuario(1,$id);
        if ($data==1) {
            $res = array('tipo'=>'success','mensaje'=>'USUARIO ACTIVADA');
        }else{
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL ACTIVAR EL USUARIO');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function permisos($id){
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        $data = $this->model->getPermisos();
        $this->views->getView($this,"permisos",$data);
    }

    
}
?>
