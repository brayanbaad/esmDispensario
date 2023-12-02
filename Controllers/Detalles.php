<?php
    class Detalles extends Controller{

        public function __construct() {
            session_start();
            if (empty($_SESSION['activo'])) {
                header("location:". BASE_URL);
            }
            parent::__construct();
            
        }
        public function index(){
            
                $data['title'] =' Consulta De Pacientes';
                $data['script'] ='detalles.js';
                $this->views->getView($this,'index',$data);
        }

        public function listar() {
            $data= $this->model->getPacientes();
        for ($i=0; $i < count($data) ; $i++) { 
            if ($data[$i]['estado']==1) {
                $data[$i]['estado']='<span class="badge badge-success">ACTIVO</span>';
                if ($data[$i]['clasificacionRiesgo']=='ALTO') {
                    $data[$i]['clasificacionRiesgo']='<span class="badge badge-danger">ALTO</span>';
                    $data[$i]['acciones']='<div>
                        <a href ="'.BASE_URL.'/Detalles/detallePaciente/'.$data[$i]['id'].'" class="btn btn-primary btn-sm" "><i class="material-icons">visibility</i>Ver Paciente</a>
                        <a href ="'.BASE_URL.'/Detalles/generarPdf/'.$data[$i]['id'].'" target="_blank" class="btn btn-danger btn-sm" "><i class="material-icons">file_open</i>Historial</a>
                    </div>';
                } else {
                    $data[$i]['clasificacionRiesgo']='<span class="badge badge-success">BAJO</span>';
                    $data[$i]['acciones']='
                    <div>
                    <a href ="'.BASE_URL.'/Detalles/detallePaciente/'.$data[$i]['id'].'" class="btn btn-primary btn-sm" "><i class="material-icons">visibility</i>Ver Paciente</a>
                    <a href ="'.BASE_URL.'/Detalles/generarPdf/'.$data[$i]['id'].'" target="_blank"  class="btn btn-danger btn-sm" "><i class="material-icons">file_open</i>Historial</a>
                    </div>';
                }
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

        public function detallePaciente($id){
            if (empty($_SESSION['activo'])) {
                header("location:". BASE_URL);
            }
            $data['title'] ='Detalles Del Paciente';
            $data['script'] ='detallePaciente.js';
            $paciente = $this->model->getDetallePaciente($id);
            $data['paciente']=array();
            foreach($paciente as $valor){
                $data['paciente']= $valor;
            }
            $this->views->getView($this,"detallePaciente",$data);
        }

        public function modificarDetalle(){
            $id = $_POST['id'];
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
            $ClasificacionRiesgo = $_POST['clasificacionRiesgo'];
            $DSGestacional = $_POST['dSGestacional'];
            $TSGestacional = $_POST['tSGestacional'];
            $TSPareja = $_POST['tSPareja'];
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
                if ($id!=""){
                    $verificarPaciente= $this->model->getVerificar('identificacion', $identificacion,$id);
                    if (empty($verificarPaciente)) {
                        $verificarTelefono= $this->model->getVerificar('telefono', $telefono,$id);
                        if (empty($verificarTelefono)) {
                            $data = $this->model->ModificarPaciente($fechaRuta,$tipoIdentificacion,$identificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$telefono,$direccion,$nivelEducativo
                            ,$ocupacion,$fechaMenstruacion,$fechaCPN1,$sgestacionalIngreso,$fechaUControlPre,$SemanasAControl,$ClasificacionRiesgo,$DSGestacional,$TSGestacional,$TSPareja,$CDVIH
                            ,$IPTVIH,$ALMaterna,$EMicroMulti,$fechaEObstetrico,$MPFamiliar,$VitalidadMadre,$VitalidadNacido,$fechaPParto,$fechaLactancia,$CFactoresRiesgo,$RiesgoBiopsicosocial
                            ,$NGestacionesActuales,$AntecedentesParto,$cesareas,$Abortos,$HijosVivos,$HijosMuertos,$AntecedentesPatologicos,$Peso,$Talla,$IMC,$CursoPreparacion,$AtencionGineco
                            ,$AtencionOdontologia,$AtencionNutricion,$AtencionPsicologia,$NumeroControles,$VacunaTetano,$DPTA,$Influenza,$VacunaCovid,$SuministroAcidoAcetil,$CRiesgoPreeclampsia
                            ,$fechaTomaSifilis,$ResultadoSifilis,$fechaTomaVIH,$ResultadoVIH,$fechaTomaHB,$ResultadoHB,$fechaTomaGlicemia,$ResultadoGlicemia,$TomaLab1Trimestre,$TomaLab2Trimestre
                            ,$TomaLab3Trimestre,$SolicitaIVE,$TamizajeChagas,$fechaAfiliacionSSFM,$fechaTamizaje1,$ResultadoTamizaje1,$fechaTamizaje2,$ResultadoTamizaje2,$fechaTamizaje3
                            ,$ResultadoTamizaje3,$fechaTamizaje4,$ResultadoTamizaje4,$observaciones,$id);
                            if ($data>0) {
                                $res = array('tipo'=>'success','mensaje'=>'LOS DATOS FUERON MODIFICADO CON EXITO');
                            }else {
                                $res = array('tipo'=>'error','mensaje'=>'ERROR AL MODIFICAR LOS DATOS DEL PACIENTE');
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


        public function generarPdf($id) {
            $paciente =$this->model->getPacienteHistorial($id);
            require('Libraries/fpdf/fpdf.php');
            $pdf = new FPDF('P','mm','A4');
            $pdf->SetTitle('Historial Del Paciente');
            $pdf->AddPage();
            $pdf->Cell(100,22,'',1,'L');
            $pdf->Image('Assets/img/cabeCera.PNG',12,15,90,0);
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(95,6,utf8_decode('Historia Clinica'),1,0,'L');
            $pdf->Ln();
            $pdf->Cell(100,22);
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(95,5,utf8_decode('Codigo: '),1,0,'L');
            $pdf->Ln();
            $pdf->Cell(100,22);
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(95,5,utf8_decode('Proceso: '),1,0,'L');
            $pdf->Ln();
            $pdf->Cell(100,22);
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(95,6,utf8_decode('Vigente a partir de:'),1,0,'L');
            $pdf->Ln(7);
            $pdf->SetFont('TIMES','B',10);
            $pdf->Cell(175,10,utf8_decode('FECHA INGRESO A RUTA'),0,0,'R');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(22,10,utf8_decode($paciente['fechaRuta']),0,0,'L');
            $pdf->Ln(11);
            $pdf->SetFont('TIMES','B',12);
            $pdf->Cell(195,7,utf8_decode('DATOS BÁSICOS DEL PACIENTE '),1,0,'C');
            $pdf->Ln(9);
            
            //DATOS BASICOS
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(23,10,utf8_decode(' NOMBRES :'),0,0,'C');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(90,10,utf8_decode($paciente['nombres']),0,0,'C');

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(2,10,utf8_decode(' APELLIDOS :'),0,0,'C');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(75,10,utf8_decode($paciente['apellidos']),0,0,'C');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(36,10,utf8_decode(' IDENTIFICACION :'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(68,10,utf8_decode($paciente['identificacion']),0,0,'C');

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(33,10,utf8_decode(' TIPO DOCUMENTO :'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(28,10,utf8_decode($paciente['tipoIdentificacion']),0,0,'C');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(50,10,utf8_decode('FECHA DE NACIMIENTO:'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(40,10,utf8_decode($paciente['fechaNacimiento']),0,0,'C');

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(35,10,utf8_decode(' EDAD :'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(50,10,utf8_decode($paciente['edad']),0,0,'C');
            $pdf->Ln(6);
            
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(25,10,utf8_decode('TELEFONO:'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(88,10,utf8_decode($paciente['telefono']),0,0,'C');

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(2,10,utf8_decode('DIRECCION:'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(85,10,utf8_decode($paciente['direccion']),0,0,'C');
            $pdf->Ln(6);
            
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(40,10,utf8_decode('NIVEL EDUCATIVO:'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(59,10,utf8_decode($paciente['nivelEducativo']),0,0,'C');

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(31,10,utf8_decode('OCUPACION:'),0,0,'C');
            $pdf->SetFont('TIMES','I',12);
            $pdf->Cell(45,10,utf8_decode($paciente['ocupacion']),0,0,'C');
            $pdf->Ln(12);

            // *********** MODULO 2  *******

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(195,5,utf8_decode('PT020 - SUPERSALUD '),1,0,'C');
            $pdf->Ln(8);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA ULTIMA MENSTRUACION :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(35,10,utf8_decode($paciente['fechaMenstruacion']),0,0,'L');
            $pdf->Ln(6);
            
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA DE INGRESO CPN1 :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(35,10,utf8_decode($paciente['fechaCPN1']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('SEMANAS DE GESTACION AL INGRESO :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['sgestacionalIngreso']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA ULTIMO CONTROL PRENATAL :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(55,10,utf8_decode($paciente['fechaUControlPre']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('SEMANAS ACTUALES DEL ULTIMO CONTROL :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['semanasAControl']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('CLASIFICACION RIESGO OBSTETRICO :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['clasificacionRiesgo']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('DIAGNOSTICO SIFILIS GESTACIONAL CONFIRMADO :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(55,10,utf8_decode($paciente['dSGestacional']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('TRATAMIENTO SIFILIS GESTACIONAL :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['tSGestacional']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('TRATAMIENTO PARA SIFILIS EN PAREJA :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['tSPareja']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('CONFIRMACION DIAGNOSTICO INFECCION VIH :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['CDVIH']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('INGRESO AL PROGRAMA TRATAMIENTO VIH :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(55,10,utf8_decode($paciente['IPTVIH']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ASESORIA LACTANCIA MATERNA 1 DIA :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['ALMaterna']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ENTREGA MICRONUTRIENTES - MULTIVITAMINICOS :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['EMicroMulti']),0,0,'L');
            $pdf->Ln(6);
        
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA EVENTO OBSTETRICO (PARTO-ABORTO) :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['fechaEObstetrico']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('METODO DE PLANIFICACION FAMILIAR :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(55,10,utf8_decode($paciente['MPFamiliar']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('VITALIDAD MADRE FINAL DEL EMBARAZO :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['VitalidadMadre']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('VITALIDAD RECIEN NACIDO :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['VitalidadNacido']),0,0,'L');
            $pdf->Ln(15);

            //************* MODULO 3 **********
            
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(195,5,utf8_decode('RIAMPN RESOLUCIÓN 3280 / 2018 MSPS '),1,0,'C');
            $pdf->Ln(8);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA PROBABLE DE PARTO :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['fechaPParto']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA ASESORIA LACTANCIA MATERNA :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['fechaLactancia']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(107,10,utf8_decode('CLASIFICACION FACTORES Y CRITERIOS DE RIESGO:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(80,10,utf8_decode($paciente['CFactoresRiesgo']),0,0,'L');
            $pdf->Ln(6);
            
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('RIESGO BIOPSICOSOCIAL :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(38,10,utf8_decode($paciente['RiesgoBiopsicosocial']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('NUMERO DE GESTACIONES ACTUALES :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['NGestacionesActuales']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ANTECEDENTES DE PARTOS :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(18,10,utf8_decode($paciente['AntecedentesParto']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('CESAREAS :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(30,10,utf8_decode($paciente['cesareas']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ABORTOS :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(25,10,utf8_decode($paciente['Abortos']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('HIJOS VIVOS :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['HijosVivos']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('HIJOS MUERTOS:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['HijosMuertos']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ANTECEDENTES PATOLOGICOS :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(80,10,utf8_decode($paciente['AntecedentesPatologicos']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('PESO (KG) :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['peso']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('TALLA (M):'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['Talla']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('IMC:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['IMC']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('CURSO PREPARACION MATERNIDAD-PATERNIDAD :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(80,10,utf8_decode($paciente['CursoPreparacion']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ATENCION POR GINECOBSTRETICIA :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['AtencionGineco']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ATENCION POR ODONTOLOGIA:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['AtencionOdontologia']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ATENCION POR NUTRICION :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['AtencionNutricion']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('ATENCION POR PSICOLOGIA:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['AtencionPsicologia']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('NUMERO DE CONTROLORES A FECHA COHORTE :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['NumeroControles']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('VACUNA TETANO :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['VacunaTetano']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('DPTA :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['DPTA']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('VACUNA COVID-19:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['VacunaCovid']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('SUMINISTRO ACIDO ACETILSALICILICO-ASA :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['SuministroAcidoAcetil']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('CLASIFICACION DEL RIESGO PLEECLAMPSIA:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['CRiesgoPreeclampsia']),0,0,'L');
            $pdf->Ln(15);

            //*************** MODULO 4 ******** 

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(195,5,utf8_decode('RES 4505 / RES 202 DE LA MADRES'),1,0,'C');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA TOMA DE SIFILIS :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['fechaTomaSifilis']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('RESULTADO DE EXAMEN SIFILIS:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(80,10,utf8_decode($paciente['ResultadoSifilis']),0,0,'L');
            $pdf->Ln(6);
            
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA TOMA DE VIH :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(38,10,utf8_decode($paciente['fechaTomaVIH']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('RESULTADO DE EXAMEN VIH :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['ResultadoVIH']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA TOMA DE HB  :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(18,10,utf8_decode($paciente['fechaTomaHB']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('RESULTADO DE EXAMEN HB :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(30,10,utf8_decode($paciente['ResultadoHB']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('FECHA TOMA DE GLICEMIA BASA :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(25,10,utf8_decode($paciente['fechaTomaGlicemia']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('RESULTADO DE EXAMEN GLICEMIA BASAL  :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['ResultadoGlicemia']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('TOMA DE LABORATORIOS 1 TRIMESTRE:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['TomaLab1Trimestre']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('TOMA DE LABORATORIOS 2 TRIMESTRE: :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(80,10,utf8_decode($paciente['TomaLab2Trimestre']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('TOMA DE LABORATORIOS 3 TRIMESTRE: :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['TomaLab3Trimestre']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('SOLICITA IVE:'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['SolicitaIVE']),0,0,'L');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(115,10,utf8_decode('TAMIZAJE CHAGAS'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['TamizajeChagas']),0,0,'L');
            $pdf->Ln(15);

             //*************** MODULO 5 ******** 

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(195,5,utf8_decode('CUENTA DE ALTO COSTO'),1,0,'C');
            $pdf->Ln(7);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(140,10,utf8_decode('FECHA AFILIACION AL SSFM :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(50,10,utf8_decode($paciente['fechaAfiliacionSSFM']),0,0,'L');
            $pdf->Ln(7);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(140,10,utf8_decode('FECHA REALIZACION TAMIZAJE VIH 1 TRIMESTRE DE GESTACION :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(80,10,utf8_decode($paciente['fechaTamizaje1']),0,0,'L');
            $pdf->Ln(7);
            
            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(140,10,utf8_decode(' RESULTADO TAMIZAJE VIH 1 TRIMESTRE DE GESTACION :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(38,10,utf8_decode($paciente['ResultadoTamizaje1']),0,0,'L');
            $pdf->Ln(7);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(140,10,utf8_decode('FECHA REALIZACION TAMIZAJE VIH 2 TRIMESTRE DE GESTACION :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(45,10,utf8_decode($paciente['fechaTamizaje2']),0,0,'L');
            $pdf->Ln(7);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(140,10,utf8_decode('RESULTADO TAMIZAJE VIH 2 TRIMESTRE DE GESTACION  :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(18,10,utf8_decode($paciente['ResultadoTamizaje2']),0,0,'L');
            $pdf->Ln(7);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(140,10,utf8_decode('FECHA REALIZACION TAMIZAJE VIH 3 TRIMESTRE DE GESTACION  :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(30,10,utf8_decode($paciente['fechaTamizaje3']),0,0,'L');
            $pdf->Ln(7);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(140,10,utf8_decode('RESULTADO TAMIZAJE VIH 3 TRIMESTRE DE GESTACION :'),0,0,'L');
            $pdf->SetFont('TIMES','I',11);
            $pdf->Cell(25,10,utf8_decode($paciente['ResultadoTamizaje3']),0,0,'L');
            $pdf->Ln(15);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(195,6,utf8_decode('GENERALES'),1,0,'C');
            $pdf->Ln(6);

            $pdf->SetFont('TIMES','B',11);
            $pdf->Cell(40,10,utf8_decode('OBSERVACIONES :'),0,0,'L');
            $pdf->Ln();
            $pdf->SetFont('TIMES','I',11);
            $pdf->MultiCell(195,5,utf8_decode($paciente['observaciones']),1,'L');
            
            $pdf->Output();
        }
    } 

?>