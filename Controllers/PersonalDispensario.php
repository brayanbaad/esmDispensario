<?php
class PersonalDispensario extends Controller{

        public function __construct() {
            session_start();
            if (empty($_SESSION['activo'])) {
                header("location:". BASE_URL);
            }
            parent::__construct();
            
        }

        public function index(){
            $id_user = $_SESSION['id_usuario'];
            $verificar = $this->model->verificarPermiso($id_user,'personalDispensario');
            if (!empty($verificar)) {
                $data['grados'] = $this->model->getGradosPersonal();
                $data['especialidades'] = $this->model->getEspecialidadPersonal();
                $data['cargos'] = $this->model->getCargosPersonal();
                $data['secciones'] = $this->model->getSeccionPersonal();
                $data['title'] =' Gestion De Personal Dispensario';
                $data['script'] ='personalDispensario.js';
                $this->views->getView($this,'index',$data);
            } else {
                header('Location:'.BASE_URL.'Errors/permisos');
            }
        }

        public function listar(){
            $data= $this->model->getPersonasDispensario();
            for ($i=0; $i < count($data) ; $i++) { 
                if ($data[$i]['estado']==1) {
                    $data[$i]['estado']='<span class="badge badge-success"> ACTIVO</span>';
                    $data[$i]['acciones']='
                    <div>
                    <a href ="#" class="btn btn-primary btn-sm" onclick="Editar('.$data[$i]['id'].');"><i class="material-icons">edit</i></a>
                    <a href ="#" class="btn btn-danger btn-sm"  onclick="Eliminar('.$data[$i]['id'].');"><i class="material-icons">delete</i></a>
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
        public function registrar(){
            $grado = $_POST['grado'];
            $identificacion = $_POST['identificacion'];
            $fecha = $_POST['fecha'];
            $apellidos = $_POST['apellidos'];
            $apellidos = strtoupper($apellidos);
            $nombres = $_POST['nombres'];
            $nombres = strtoupper($nombres);
            $telefono = $_POST['telefono'];
            $telefono = strtoupper($telefono);
            $correo = $_POST['correo'];
            $correo = strtoupper($correo);
            $especialidad = $_POST['especialidad'];
            $cargo = $_POST['cargo'];
            $seccion = $_POST['seccion'];
            $arma = $_POST['arma'];
            $arma = strtoupper($arma);
            $novedad = $_POST['novedad'];
            $novedad = strtoupper($novedad);
            $id_personalDispensario = $_POST['id_personalDispensario'];
            if (empty($grado) || empty($identificacion) || empty($fecha) || empty($apellidos) 
            || empty($nombres) || empty($telefono) || empty($correo) || empty($especialidad) 
            || empty($cargo) || empty($seccion) || empty($arma) || empty($novedad)) {
                $res = array('tipo'=>'Warning','mensaje'=>'TODOS LOS CAMPOS SON REQUERIDOS');
            }else{
                if ($id_personalDispensario =="") {
                    $verificarIdentificacion=$this->model->getVerificar('identificacion',$identificacion,0);
                    if (empty($verificarIdentificacion)) {
                        $data = $this->model->registrar($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad);
                        if ($data>0) {
                            $res = array('tipo'=>'success','mensaje'=>'PERSONAL DISPENSARIO FUE REGISTRADO CON EXITO');
                        }else {
                            $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR EL PERSONAL DISPENSARIO');
                        }
                    }else{
                        $res = array('tipo'=>'warning','mensaje'=>'LA IDENTIFACION DE LA PERSONA YA EXISTE');
                    }
                }else{
                    $verificarIdentificacion=$this->model->getVerificar('identificacion',$identificacion,$id_personalDispensario);
                    if (empty($verificarIdentificacion)) {
                        $data = $this->model->modificar($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad,$id_personalDispensario);
                        if ($data==1) {
                            $res = array('tipo'=>'success','mensaje'=>'PERSONAL DISPENSARIO FUE MODIFICADO CON EXITO');
                        }else {
                            $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR EL PERSONAL');
                        }
                    }else{
                        $res = array('tipo'=>'warning','mensaje'=>'EL NUMERO IDENTIFACION DE LA PERSONA YA EXISTE');
                    }
                }
                
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminar($id)  {
            $data = $this->model->eliminar($id);
            if ($data==1) {
                $res = array('tipo'=>'success','mensaje'=>'PROGRAMA DESACTIVADO');
            }else{
                $res = array('tipo'=>'error','mensaje'=>'ERROR AL ELIMINAR EL PROGRAMA');
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function editar($id){
            $data = $this->model->getPersonaDispensario($id);
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function activar($id) {
            $data = $this->model->accionPersonalDispensario(1,$id);
            if ($data==1) {
                $res = array('tipo'=>'success','mensaje'=>'PERSONA DEL DISPENSARIO ACTIVADO');
            }else{
                $res = array('tipo'=>'error','mensaje'=>'ERROR AL ACTIVAR LA PERSONA');
            }
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
            die();
        }
        

    }
?>