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

    public function registrar()
    {
        print_r($_POST);
        // $persona = $_POST['persona'];
        // $usuario = $_POST['usuario'];
        // $usuario = strtoupper($usuario);
        // $clave = $_POST['clave'];
        // $confirmar = $_POST['confirmar'];
        // $programa = $_POST['programa'];
        // $rol = $_POST['rol'];
        // $id_usuario = $_POST['id_usuario'];
        // $hash = hash("SHA256",$clave);
        // if (empty($usuario)|| empty($persona) || empty($programa) || empty($rol)) {
        //     $res = array('tipo'=>'warning','mensaje'=>'TODOS LOS CAMPOS SON REQUERIDOS');
        // }else{
        //     if ($id_usuario=="") {
        //         if ($clave!= $confirmar) {
        //             $res = array('tipo'=>'warning','mensaje'=>'LAS CONTRASEÑAS NO COINCIDEN');
        //         }else{
        //             $verificarUsuario= $this->model->getVerificar('usuario', $usuario,0);
        //             if (empty($verificarUsuario)) {
        //                 $data = $this->model->RegistrarUsuario($usuario,$persona,$rol,$hash,$programa);
        //                 if ($data>0) {
        //                     $res = array('tipo'=>'success','mensaje'=>'EL USUARIO FUE REGISTRADO CON EXITO');
        //                 }else {
        //                     $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR EL USUARIO');
        //                 }
        //             } else {
        //                 $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL USUARIO YA EXISTE');
        //             }
        //         }
        //     }else{
        //         $verificarUsuario= $this->model->getVerificar('usuario', $usuario,$id_usuario);
        //         if (empty($verificarUsuario)) {
        //             $data = $this->model->ModificarUsuario($usuario,$persona,$rol,$programa,$id_usuario);
        //             if ($data ==1) {
        //                 $res = array('tipo'=>'success','mensaje'=>'EL USUARIO FUE MODIFICADO CON EXITO');
        //             }else {
        //                 $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR EL USUARIO');
        //             }
        //         } else {
        //             $res = array('tipo'=>'warning','mensaje'=>'EL NOMBRE DEL USUARIO YA EXISTE');
        //         }
        //     }
        // }
        // echo json_encode($res,JSON_UNESCAPED_UNICODE);
        // die();
    }

    
}

