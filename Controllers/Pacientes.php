<?php
class Pacientes extends Controller{
    public function __construct() {
        session_start();
        
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        parent::__construct();
    }

    public function index()  {
        
            $data['title'] ='Gestión de Registro';
            $data['script'] ='pacientes.js';
            $this->views->getView($this,'index',$data);
        
    }
    public function registrar(){
        $id_paciente = $_POST['id_paciente'];
        $fechaRuta = $_POST['fechaRuta'];
        $tipoIdentificacion = $_POST['tipoIdentificacion'];
        $identificacion = $_POST['identificacion'];
        $apellidos = $_POST['apellidos'];
        $apellidos = strtoupper($apellidos);
        $nombres = $_POST['nombres'];
        $nombres = strtoupper($nombres);
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $edad = $_POST['edad'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $direccion = strtoupper($direccion);
        $nivelEducativo = $_POST['nivelEducativo'];
        $nivelEducativo = strtoupper($nivelEducativo);
        $ocupacion = $_POST['ocupacion'];
        $ocupacion = strtoupper($ocupacion);
        $fechaMenstruacion = $_POST['fechaMenstruacion'];
        $fechaCPN1 = $_POST['fechaCPN1'];
        $sgestacionalIngreso = $_POST['sgestacionalIngreso'];
        $fechaUControlPre = $_POST['fechaUControlPre'];
        $SemanasAControl = $_POST['SemanasAControl'];
        $ClasificacionRiesgo = $_POST['ClasificacionRiesgo'];
        $DSGestacional = $_POST['DSGestacional'];
        $TSGestacional = $_POST['TSGestacional'];
        $TSPareja = $_POST['TSPareja'];
        $CDVIH = $_POST['CDVIH'];
        $IPTVIH = $_POST['IPTVIH'];
        $ALMaterna = $_POST['ALMaterna'];
        $EMicroMulti = $_POST['EMicroMulti'];
        $fechaEObstetrico = $_POST['fechaEObstetrico'];
        $MPFamiliar = $_POST['MPFamiliar'];
        $VitalidadMadre = $_POST['VitalidadMadre'];
        $VitalidadNacido = $_POST['VitalidadNacido'];
        $fechaPParto = $_POST['fechaPParto'];
        $fechaLactancia = $_POST['fechaLactancia'];
        $CFactoresRiesgo = $_POST['CFactoresRiesgo'];
        $CFactoresRiesgo = strtoupper($CFactoresRiesgo);
        $RiesgoBiopsicosocial = $_POST['RiesgoBiopsicosocial'];
        $NGestacionesActuales = $_POST['NGestacionesActuales'];
        $AntecedentesParto = $_POST['AntecedentesParto'];
        $cesareas = $_POST['cesareas'];
        $Abortos = $_POST['Abortos'];
        $HijosVivos = $_POST['HijosVivos'];
        $HijosMuertos = $_POST['HijosMuertos'];
        $AntecedentesPatologicos = $_POST['AntecedentesPatologicos'];
        $AntecedentesPatologicos = strtoupper($AntecedentesPatologicos);
        $Peso = $_POST['Peso'];
        $Talla = $_POST['Talla'];
        $IMC = $_POST['IMC'];
        $CursoPreparacion = $_POST['CursoPreparacion'];
        $AtencionGineco = $_POST['AtencionGineco'];
        $AtencionOdontologia = $_POST['AtencionOdontologia'];
        $AtencionNutricion = $_POST['AtencionNutricion'];
        $AtencionPsicologia = $_POST['AtencionPsicologia'];
        $NumeroControles = $_POST['NumeroControles'];
        $VacunaTetano = $_POST['VacunaTetano'];
        $DPTA = $_POST['DPTA'];
        $Influenza = $_POST['Influenza'];
        $VacunaCovid = $_POST['VacunaCovid'];
        $SuministroAcidoAcetil = $_POST['SuministroAcidoAcetil'];
        $CRiesgoPreeclampsia = $_POST['CRiesgoPreeclampsia'];
        $fechaTomaSifilis = $_POST['fechaTomaSifilis'];
        $ResultadoSifilis = $_POST['ResultadoSifilis'];
        $fechaTomaVIH = $_POST['fechaTomaVIH'];
        $ResultadoVIH = $_POST['ResultadoVIH'];
        $fechaTomaHB = $_POST['fechaTomaHB'];
        $ResultadoHB = $_POST['ResultadoHB'];
        $fechaTomaGlicemia = $_POST['fechaTomaGlicemia'];
        $ResultadoGlicemia = $_POST['ResultadoGlicemia'];
        $TomaLab1Trimestre = $_POST['TomaLab1Trimestre'];
        $TomaLab2Trimestre = $_POST['TomaLab2Trimestre'];
        $TomaLab3Trimestre = $_POST['TomaLab3Trimestre'];
        $SolicitaIVE = $_POST['SolicitaIVE'];
        $TamizajeChagas = $_POST['TamizajeChagas'];
        $fechaAfiliacionSSFM = $_POST['fechaAfiliacionSSFM'];
        $fechaTamizaje1 = $_POST['fechaTamizaje1'];
        $ResultadoTamizaje1 = $_POST['ResultadoTamizaje1'];
        $fechaTamizaje2 = $_POST['fechaTamizaje2'];
        $ResultadoTamizaje2 = $_POST['ResultadoTamizaje2'];
        $fechaTamizaje3 = $_POST['fechaTamizaje3'];
        $ResultadoTamizaje3 = $_POST['ResultadoTamizaje3'];
        $fechaTamizaje4 = $_POST['fechaTamizaje4'];
        $ResultadoTamizaje4 = $_POST['ResultadoTamizaje4'];
        $observaciones = $_POST['observaciones'];
        $observaciones = strtoupper($observaciones);
        if (empty($tipoIdentificacion)|| empty($identificacion) || empty($apellidos) || empty($nombres) 
            || empty($edad) || empty($telefono) || empty($direccion) || empty($nivelEducativo)
            || empty($ocupacion)) {
            $res = array('tipo'=>'warning','mensaje'=>'TODOS LOS DATOS PERSONALES BASICOS SON REQUERIDOS');
        }else{
            if ($id_paciente==""){
                $verificarPaciente= $this->model->getVerificar('identificacion', $identificacion,0);
                if (empty($verificarPaciente)) {
                    $verificarTelefono= $this->model->getVerificar('telefono', $telefono,0);
                    if (empty($verificarTelefono)) {
                        $data = $this->model->registrarPaciente($fechaRuta,$tipoIdentificacion,$identificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$telefono,$direccion,$nivelEducativo
                        ,$ocupacion,$fechaMenstruacion,$fechaCPN1,$sgestacionalIngreso,$fechaUControlPre,$SemanasAControl,$ClasificacionRiesgo,$DSGestacional,$TSGestacional,$TSPareja,$CDVIH
                        ,$IPTVIH,$ALMaterna,$EMicroMulti,$fechaEObstetrico,$MPFamiliar,$VitalidadMadre,$VitalidadNacido,$fechaPParto,$fechaLactancia,$CFactoresRiesgo,$RiesgoBiopsicosocial
                        ,$NGestacionesActuales,$AntecedentesParto,$cesareas,$Abortos,$HijosVivos,$HijosMuertos,$AntecedentesPatologicos,$Peso,$Talla,$IMC,$CursoPreparacion,$AtencionGineco
                        ,$AtencionOdontologia,$AtencionNutricion,$AtencionPsicologia,$NumeroControles,$VacunaTetano,$DPTA,$Influenza,$VacunaCovid,$SuministroAcidoAcetil,$CRiesgoPreeclampsia
                        ,$fechaTomaSifilis,$ResultadoSifilis,$fechaTomaVIH,$ResultadoVIH,$fechaTomaHB,$ResultadoHB,$fechaTomaGlicemia,$ResultadoGlicemia,$TomaLab1Trimestre,$TomaLab2Trimestre
                        ,$TomaLab3Trimestre,$SolicitaIVE,$TamizajeChagas,$fechaAfiliacionSSFM,$fechaTamizaje1,$ResultadoTamizaje1,$fechaTamizaje2,$ResultadoTamizaje2,$fechaTamizaje3
                        ,$ResultadoTamizaje3,$fechaTamizaje4,$ResultadoTamizaje4,$observaciones);
                        if ($data>0) {
                            $res = array('tipo'=>'success','mensaje'=>'EL PACIENTE FUE REGISTRADO CON EXITO');
                        }else {
                            $res = array('tipo'=>'error','mensaje'=>'ERROR AL REGISTRAR EL PACIENTE');
                        }
                    } else {
                        $res = array('tipo'=>'warning','mensaje'=>'EL NUMERO DE TELEFONO YA ESTÁ REGISTRADO');
                    }
                } else {
                    $res = array('tipo'=>'warning','mensaje'=>'LA IDENTIFICACION DEL PACIENTE YA ESTA REGISTRADA');
                }
            }
        }
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
        
    }

    public function reporteEdades() {
        $data = $this->model->getEdades();
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function reporteClasificacion() {
        $data = $this->model->getClasificacion();
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function reporteSemanasGestational() {
        $data = $this->model->getSemanasGestacional();
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }
    
    
}

