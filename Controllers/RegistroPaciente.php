<?php
class RegistroPaciente extends Controller{
    public function __construct() {
        session_start();
        
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        parent::__construct();
    }

    public function index()  {
        
            $data['title'] ='Gestión de Registro';
            $data['script'] ='registroPaciente.js';
            $this->views->getView($this,'registro',$data);
        
    }
    // public function listar(){
    //     $data= $this->model->getPacientes();
    //     for ($i=0; $i < count($data) ; $i++) { 
    //         if ($data[$i]['estado']==1) {
    //             $data[$i]['estado']='<span class="badge badge-success"> ACTIVO</span>';
    //             $data[$i]['acciones']='
    //             <div>
    //             <a href ="'.BASE_URL.'pacientes/detallePaciente/'.$data[$i]['id'].'" class="btn btn-info btn-sm" ;"><i class="material-icons">visibility</i></a>
                
    //             </div>';
                
    //         }else{
    //             $data[$i]['estado']='<span class="badge badge-danger">DESACTIVADO</span>';
    //             $data[$i]['acciones']='
    //             <div>
    //             <a href ="#" class="btn btn-success btn-sm"  onclick="Activar('.$data[$i]['id'].');"><i class="material-icons">recycling</i>Activar</a>
    //             </div>';
    //         }
    //     }
    //     echo json_encode($data,JSON_UNESCAPED_UNICODE);
    //     die();
    // }

    // public function detallePaciente($id){
    //     if (empty($_SESSION['activo'])) {
    //         header("location:". BASE_URL);
    //     }
    //     $data['title'] ='Detalle Del Paciente';
    //     $data['paciente'] = $this->model->getDetalles($id);
    //     $data['id_paciente'] = $id;
    //     $this->views->getView($this,"PacienteDetalle",$data);
    // }

    public function registrar()
    {
        print_r($_POST);
        // $fecha = $_POST['fecha'];
        // $tipoIdentificacion = $_POST['tipoIdentificacion'];
        // $identificacion = $_POST['identificacion'];
        // $apellidos = $_POST['apellidos'];
        // $apellidos = strtoupper($apellidos);
        // $nombres = $_POST['nombres'];
        // $nombres = strtoupper($nombres);
        // $fechaNacimiento = $_POST['fechaNacimiento'];
        // $edad = $_POST['edad'];
        // $telefono = $_POST['telefono'];
        // $direccion = $_POST['direccion'];
        // $direccion = strtoupper($direccion);
        // $nivelEducativo = $_POST['nivelEducativo'];
        // $nivelEducativo = strtoupper($nivelEducativo);
        // $ocupacion = $_POST['ocupacion'];
        // $ocupacion = strtoupper($ocupacion);
        // $id_paciente = $_POST['id_paciente'];
        // if (empty($tipoIdentificacion)|| empty($identificacion) || empty($apellidos) || empty($nombres) 
        //     || empty($edad) || empty($telefono) || empty($direccion) || empty($nivelEducativo)
        //     || empty($ocupacion)) {
        //     $res = array('tipo'=>'warning','mensaje'=>'TODOS LOS CAMPOS SON REQUERIDOS');
        // }else{
        //     if ($id_paciente==""){
        //         $verificarPaciente= $this->model->getVerificar('identificacion', $identificacion,0);
        //         if (empty($verificarPaciente)) {
        //             $data = $this->model->registrarPaciente($id_paciente,$fecha,$tipoIdentificacion,$identificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$direccion,$telefono,$nivelEducativo,$ocupacion);
        //             if ($data>0) {
        //                 $res = array('tipo'=>'success','mensaje'=>'EL PACIENTE FUE REGISTRADO CON EXITO');
        //             }else {
        //                 $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR EL PACIENTE');
        //             }
        //         } else {
        //             $res = array('tipo'=>'warning','mensaje'=>'LA IDENTIFICACION DEL PACIENTE YA EXISTE');
        //         }
        //     }
        // }
        // echo json_encode($res,JSON_UNESCAPED_UNICODE);
        // die();
        
    }
    
}

