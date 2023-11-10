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
        $id_user = $_SESSION['id_usuario'];
        $verificar = $this->model->verificarPermiso($id_user,'programas');
        if (!empty($verificar)) {
            $data['programas'] = $this->model->getProgramas();
            $data['personal'] = $this->model->getPersonas();
            $data['title'] ='Gestion De Usuarios';
            $data['script'] ='usuarios.js';
            $this->views->getView($this,"index",$data);
        } else {
            header('Location:'.BASE_URL.'Errors/permisos');
        }
        
    }

    public function listar(){
        $data= $this->model->getUsuarios();
        for ($i=0; $i < count($data) ; $i++) { 
            if ($data[$i]['estado']==1) {
                $data[$i]['estado']='<span class="badge badge-success">ACTIVO</span>';
                if ($data[$i]['id']==1) {
                    $data[$i]['rol']='<span class="badge badge-success">ADMINISTRADOR</span>';
                    $data[$i]['acciones']='
                    <div>
                    <a href ="#" class="btn btn-info btn-sm" onclick="Editar('.$data[$i]['id'].');"><i class="material-icons">edit</i></a>
                    <a href ="#" class="btn btn-danger btn-sm"  onclick="Eliminar('.$data[$i]['id'].');"><i class="material-icons">delete</i></a>
                </div>';
                } else {
                    $data[$i]['estado']='<span class="badge badge-success">ACTIVO</span>';
                    $data[$i]['rol']='<span class="badge bg-info">PERSONAL SALUD</span>';
                    $data[$i]['acciones']='
                        <div>
                            
                            <a href ="#" class="btn btn-info btn-sm" onclick="Editar('.$data[$i]['id'].');"><i class="material-icons">edit</i></a>
                            <a href ="#" class="btn btn-danger btn-sm"  onclick="Eliminar('.$data[$i]['id'].');"><i class="material-icons">delete</i></a>
                        </div>';
                }
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
            if($data['estado']==1){
                if ($data){
                    $_SESSION['id_usuario']=$data['id'];
                    $_SESSION['asignar']=$data['usuario'];
                    $_SESSION['rol']=$data['rol'];
                    $_SESSION['activo']= true;
                    $res = array('tipo' =>'success','mensaje'=>'BIENVENIDO AL SISTEMA DEL ESTABLECIMIENTO DE SANIDAD ESMBAS10');
                }else {
                    
                    $res = array('tipo' =>'warning','mensaje'=>' USUARIO O CONTRASEÑA ES INCORRECTA');
                }
            }else{
                $res = array('tipo' =>'warning','mensaje'=>' USUARIO NO EXISTE');
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
        $rol = $_POST['rol'];
        $id_usuario = $_POST['id_usuario'];
        $hash = hash("SHA256",$clave);
        if (empty($usuario)|| empty($persona) || empty($programa) || empty($rol)) {
            $res = array('tipo'=>'warning','mensaje'=>'TODOS LOS CAMPOS SON REQUERIDOS');
        }else{
            if ($id_usuario=="") {
                if ($clave!= $confirmar) {
                    $res = array('tipo'=>'warning','mensaje'=>'LAS CONTRASEÑAS NO COINCIDEN');
                }else{
                    $verificarUsuario= $this->model->getVerificar('usuario', $usuario,0);
                    if (empty($verificarUsuario)) {
                        $data = $this->model->RegistrarUsuario($usuario,$persona,$rol,$hash,$programa);
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
                    $data = $this->model->ModificarUsuario($usuario,$persona,$rol,$programa,$id_usuario);
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
        $data['title'] ='Gestion De Permisos';
        $data['datos'] = $this->model->getPermisos();
        $permisos = $this->model->getDetallePermisos($id);
        $data['asignados'] = array();
        foreach ($permisos as $permiso) {
            $data['asignados'][$permiso['id_permiso']] = true;
        }
        $data['script'] ='permisos.js';
        $data['id_usuario'] = $id;
        $this->views->getView($this,"permisos",$data);
    }

    public function registrarPermiso() {
        
        $id_user = $_POST['id_usuario'];
        $eliminar = $this->model->eliminarPermisos($id_user);
        if ($eliminar==1) {
            foreach ($_POST['permisos'] as $id_permiso) {
                $data=$this->model->registrarPermisos($id_user,$id_permiso);
            }
            if ($data>0) {
                $res = array('tipo'=>'success','mensaje'=>'PERMISOS ASIGNADOS CON EXITO');
            }else {
                $res = array('tipo'=>'error','mensaje'=>'ERROR AL ASIGNAR LOS PERMISOS');
            }
        }else{
            $res = array('tipo'=>'error','mensaje'=>'ERROR AL ELIMINAR LOS PERMISOS ANTERIORES');
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
        
    }
}
?>
