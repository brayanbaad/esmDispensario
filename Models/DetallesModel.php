<?php
class DetallesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getPacientes(){
        $sql = "SELECT * FROM pacientes ";
        return $this->selectAll($sql);
    }
    public function getPacienteHistorial($id){
        $sql = "SELECT * FROM pacientes WHERE id=$id" ;
        return $this->select($sql);
    }
    public function getDetallePaciente($id){
        $sql ="SELECT * FROM pacientes  WHERE id=$id";
        $data =$this->selectAll($sql);
        return $data;
    }
    public function getVerificar($item,$nombre,$id){
        if ($id > 0) {
            $sql = "SELECT id FROM pacientes WHERE $item = '$nombre' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM pacientes WHERE $item = '$nombre'";
        }
        return $this->select($sql);
    }
    public function ModificarPaciente($fechaRuta,$tipoIdentificacion,$identificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$telefono,$direccion,$nivelEducativo
    ,$ocupacion,$fechaMenstruacion,$fechaCPN1,$sgestacionalIngreso,$fechaUControlPre,$SemanasAControl,$ClasificacionRiesgo,$DSGestacional,$TSGestacional,$TSPareja,$CDVIH
    ,$IPTVIH,$ALMaterna,$EMicroMulti,$fechaEObstetrico,$MPFamiliar,$VitalidadMadre,$VitalidadNacido,$fechaPParto,$fechaLactancia,$CFactoresRiesgo,$RiesgoBiopsicosocial
    ,$NGestacionesActuales,$AntecedentesParto,$cesareas,$Abortos,$HijosVivos,$HijosMuertos,$AntecedentesPatologicos,$Peso,$Talla,$IMC,$CursoPreparacion,$AtencionGineco
    ,$AtencionOdontologia,$AtencionNutricion,$AtencionPsicologia,$NumeroControles,$VacunaTetano,$DPTA,$Influenza,$VacunaCovid,$SuministroAcidoAcetil,$CRiesgoPreeclampsia
    ,$fechaTomaSifilis,$ResultadoSifilis,$fechaTomaVIH,$ResultadoVIH,$fechaTomaHB,$ResultadoHB,$fechaTomaGlicemia,$ResultadoGlicemia,$TomaLab1Trimestre,$TomaLab2Trimestre
    ,$TomaLab3Trimestre,$SolicitaIVE,$TamizajeChagas,$fechaAfiliacionSSFM,$fechaTamizaje1,$ResultadoTamizaje1,$fechaTamizaje2,$ResultadoTamizaje2,$fechaTamizaje3
    ,$ResultadoTamizaje3,$fechaTamizaje4,$ResultadoTamizaje4,$observaciones,$id){
        $sql = "UPDATE  pacientes SET fechaRuta=?,tipoIdentificacion=?,identificacion=?,apellidos=?,nombres=?,fechaNacimiento=?,edad=?,telefono=?,direccion=?,nivelEducativo=?
        ,ocupacion=?,fechaMenstruacion=?,fechaCPN1=?,sgestacionalIngreso=?,fechaUControlPre=?,semanasAControl=?,clasificacionRiesgo=?,dSGestacional=?,tSGestacional=?,tSPareja=?,CDVIH=?
        ,IPTVIH=?,ALMaterna=?,EMicroMulti=?,fechaEObstetrico=?,MPFamiliar=?,VitalidadMadre=?,VitalidadNacido=?,fechaPParto=?,fechaLactancia=?,CFactoresRiesgo=?,RiesgoBiopsicosocial=?
        ,NGestacionesActuales=?,AntecedentesParto=?,cesareas=?,Abortos=?,HijosVivos=?,HijosMuertos=?,AntecedentesPatologicos=?,peso=?,talla=?,IMC=?,CursoPreparacion=?,AtencionGineco=?
        ,AtencionOdontologia=?,AtencionNutricion=?,AtencionPsicologia=?,NumeroControles=?,VacunaTetano=?,DPTA=?,Influenza=?,VacunaCovid=?,SuministroAcidoAcetil=?,CRiesgoPreeclampsia=?
        ,fechaTomaSifilis=?,ResultadoSifilis=?,fechaTomaVIH=?,ResultadoVIH=?,fechaTomaHB=?,ResultadoHB=?,fechaTomaGlicemia=?,ResultadoGlicemia=?,TomaLab1Trimestre=?,TomaLab2Trimestre=?
        ,TomaLab3Trimestre=?,SolicitaIVE=?,TamizajeChagas=?,fechaAfiliacionSSFM=?,fechaTamizaje1=?,ResultadoTamizaje1=?,fechaTamizaje2=?,ResultadoTamizaje2=?,fechaTamizaje3=?
        ,ResultadoTamizaje3=?,fechaTamizaje4=?,ResultadoTamizaje4=?,observaciones=? WHERE id=?";
        $datos= array($fechaRuta,$tipoIdentificacion,$identificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$telefono,$direccion,$nivelEducativo
        ,$ocupacion,$fechaMenstruacion,$fechaCPN1,$sgestacionalIngreso,$fechaUControlPre,$SemanasAControl,$ClasificacionRiesgo,$DSGestacional,$TSGestacional,$TSPareja,$CDVIH
        ,$IPTVIH,$ALMaterna,$EMicroMulti,$fechaEObstetrico,$MPFamiliar,$VitalidadMadre,$VitalidadNacido,$fechaPParto,$fechaLactancia,$CFactoresRiesgo,$RiesgoBiopsicosocial
        ,$NGestacionesActuales,$AntecedentesParto,$cesareas,$Abortos,$HijosVivos,$HijosMuertos,$AntecedentesPatologicos,$Peso,$Talla,$IMC,$CursoPreparacion,$AtencionGineco
        ,$AtencionOdontologia,$AtencionNutricion,$AtencionPsicologia,$NumeroControles,$VacunaTetano,$DPTA,$Influenza,$VacunaCovid,$SuministroAcidoAcetil,$CRiesgoPreeclampsia
        ,$fechaTomaSifilis,$ResultadoSifilis,$fechaTomaVIH,$ResultadoVIH,$fechaTomaHB,$ResultadoHB,$fechaTomaGlicemia,$ResultadoGlicemia,$TomaLab1Trimestre,$TomaLab2Trimestre
        ,$TomaLab3Trimestre,$SolicitaIVE,$TamizajeChagas,$fechaAfiliacionSSFM,$fechaTamizaje1,$ResultadoTamizaje1,$fechaTamizaje2,$ResultadoTamizaje2,$fechaTamizaje3
        ,$ResultadoTamizaje3,$fechaTamizaje4,$ResultadoTamizaje4,$observaciones,$id);
        return $this->save($sql,$datos);
        
    }
}

?>