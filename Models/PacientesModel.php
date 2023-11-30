<?php
class PacientesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function getDetalles($id){
        $sql ="SELECT * FROM pacientes  WHERE id =$id";
        $data =$this->select($sql);
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

    public function registrarPaciente($fechaRuta,$tipoIdentificacion,$identificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$telefono,$direccion,$nivelEducativo
    ,$ocupacion,$fechaMenstruacion,$fechaCPN1,$sgestacionalIngreso,$fechaUControlPre,$SemanasAControl,$ClasificacionRiesgo,$DSGestacional,$TSGestacional,$TSPareja,$CDVIH
    ,$IPTVIH,$ALMaterna,$EMicroMulti,$fechaEObstetrico,$MPFamiliar,$VitalidadMadre,$VitalidadNacido,$fechaPParto,$fechaLactancia,$CFactoresRiesgo,$RiesgoBiopsicosocial
    ,$NGestacionesActuales,$AntecedentesParto,$cesareas,$Abortos,$HijosVivos,$HijosMuertos,$AntecedentesPatologicos,$Peso,$Talla,$IMC,$CursoPreparacion,$AtencionGineco
    ,$AtencionOdontologia,$AtencionNutricion,$AtencionPsicologia,$NumeroControles,$VacunaTetano,$DPTA,$Influenza,$VacunaCovid,$SuministroAcidoAcetil,$CRiesgoPreeclampsia
    ,$fechaTomaSifilis,$ResultadoSifilis,$fechaTomaVIH,$ResultadoVIH,$fechaTomaHB,$ResultadoHB,$fechaTomaGlicemia,$ResultadoGlicemia,$TomaLab1Trimestre,$TomaLab2Trimestre
    ,$TomaLab3Trimestre,$SolicitaIVE,$TamizajeChagas,$fechaAfiliacionSSFM,$fechaTamizaje1,$ResultadoTamizaje1,$fechaTamizaje2,$ResultadoTamizaje2,$fechaTamizaje3
    ,$ResultadoTamizaje3,$fechaTamizaje4,$ResultadoTamizaje4,$observaciones){
        $sql = "INSERT INTO pacientes (fechaRuta,tipoIdentificacion,identificacion,apellidos,nombres,fechaNacimiento,edad,telefono,direccion,nivelEducativo
        ,ocupacion,fechaMenstruacion,fechaCPN1,sgestacionalIngreso,fechaUControlPre,SemanasAControl,ClasificacionRiesgo,DSGestacional,TSGestacional,TSPareja,CDVIH
        ,IPTVIH,ALMaterna,EMicroMulti,fechaEObstetrico,MPFamiliar,VitalidadMadre,VitalidadNacido,fechaPParto,fechaLactancia,CFactoresRiesgo,RiesgoBiopsicosocial
        ,NGestacionesActuales,AntecedentesParto,cesareas,Abortos,HijosVivos,HijosMuertos,AntecedentesPatologicos,Peso,Talla,IMC,CursoPreparacion,AtencionGineco
        ,AtencionOdontologia,AtencionNutricion,AtencionPsicologia,NumeroControles,VacunaTetano,DPTA,Influenza,VacunaCovid,SuministroAcidoAcetil,CRiesgoPreeclampsia
        ,fechaTomaSifilis,ResultadoSifilis,fechaTomaVIH,ResultadoVIH,fechaTomaHB,ResultadoHB,fechaTomaGlicemia,ResultadoGlicemia,TomaLab1Trimestre,TomaLab2Trimestre
        ,TomaLab3Trimestre,SolicitaIVE,TamizajeChagas,fechaAfiliacionSSFM,fechaTamizaje1,ResultadoTamizaje1,fechaTamizaje2,ResultadoTamizaje2,fechaTamizaje3
        ,ResultadoTamizaje3,fechaTamizaje4,ResultadoTamizaje4,observaciones) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
        ,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $datos= array($fechaRuta,$tipoIdentificacion,$identificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$telefono,$direccion,$nivelEducativo
        ,$ocupacion,$fechaMenstruacion,$fechaCPN1,$sgestacionalIngreso,$fechaUControlPre,$SemanasAControl,$ClasificacionRiesgo,$DSGestacional,$TSGestacional,$TSPareja,$CDVIH
        ,$IPTVIH,$ALMaterna,$EMicroMulti,$fechaEObstetrico,$MPFamiliar,$VitalidadMadre,$VitalidadNacido,$fechaPParto,$fechaLactancia,$CFactoresRiesgo,$RiesgoBiopsicosocial
        ,$NGestacionesActuales,$AntecedentesParto,$cesareas,$Abortos,$HijosVivos,$HijosMuertos,$AntecedentesPatologicos,$Peso,$Talla,$IMC,$CursoPreparacion,$AtencionGineco
        ,$AtencionOdontologia,$AtencionNutricion,$AtencionPsicologia,$NumeroControles,$VacunaTetano,$DPTA,$Influenza,$VacunaCovid,$SuministroAcidoAcetil,$CRiesgoPreeclampsia
        ,$fechaTomaSifilis,$ResultadoSifilis,$fechaTomaVIH,$ResultadoVIH,$fechaTomaHB,$ResultadoHB,$fechaTomaGlicemia,$ResultadoGlicemia,$TomaLab1Trimestre,$TomaLab2Trimestre
        ,$TomaLab3Trimestre,$SolicitaIVE,$TamizajeChagas,$fechaAfiliacionSSFM,$fechaTamizaje1,$ResultadoTamizaje1,$fechaTamizaje2,$ResultadoTamizaje2,$fechaTamizaje3
        ,$ResultadoTamizaje3,$fechaTamizaje4,$ResultadoTamizaje4,$observaciones);
        return $this->insertar($sql,$datos);
        
    }

    public function eliminar($id){
        $sql = "UPDATE  personal_acceso SET estado = ? WHERE id = ?";
        $datos= array(0,$id);
        return $this->save($sql,$datos);
    }

    public function modificar($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad,$id){
        $sql = "UPDATE personal_acceso  SET id_grado =?,identificacion=?,fecha_nacimiento=?,apellidos=?,nombres=?,telefono=?,correo=?,id_especialidad=?,id_cargo=?,id_seccion=?,arma=?,novedad=?  WHERE id =?";
        $datos= array($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad,$id);
        return $this->save($sql,$datos);
    }

    public function getEdades(){
        $sql = "SELECT p.edad , COUNT(*) as cantidad, (COUNT(*) * 100.0 / (SELECT COUNT(*) FROM pacientes)) as porcentaje FROM pacientes p GROUP BY edad;";
        return $this->selectAll($sql);
    }

    public function getClasificacion(){
        $sql = "SELECT p.clasificacionRiesgo,COUNT(*) as cantidad, (COUNT(*) * 100.0 / (SElECT COUNT(*) FROM pacientes)) as porcentaje FROM pacientes p GROUP BY p.clasificacionRiesgo;";
        return $this->selectAll($sql);
    }
    
    public function getSemanasGestacional(){
        $sql = "SELECT p.sgestacionalIngreso as semanas , COUNT(*) as cantidad, (COUNT(*) * 100.0 / (SELECT COUNT(*) FROM pacientes)) as porcentaje FROM pacientes p GROUP BY sgestacionalIngreso;";
        return $this->selectAll($sql);
    }


    


}
