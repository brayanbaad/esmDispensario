<?php
class PacientesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPacientes(){
        $sql = "SELECT * FROM pacientes";
        return $this->selectAll($sql);
    }
    public function getDetalles($id){
        $sql ="SELECT * FROM pacientes  WHERE id =$id";
        $data =$this->select($sql);
        return $data;
    }
    public function getVerificar($item,$identificacion,$id){
        if ($id > 0) {
            $sql = "SELECT id FROM pacientes WHERE $item = '$identificacion' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM pacientes WHERE $item = '$identificacion'";
        }
        return $this->select($sql);
    }

    public function registrarPaciente($id_paciente,$fecha,$tipoIdentificacion,$numeroIdentificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$direccion,$telefono,$nivelEducativo,$ocupacion){
        $sql = "INSERT INTO pacientes (id,fecha_ingreso,tipo_identificacion,identificacion,apellidos,nombres,fecha_nacimiento,edad,direccion,telefono,nivelEducativo,ocupacion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $datos= array($id_paciente,$fecha,$tipoIdentificacion,$numeroIdentificacion,$apellidos,$nombres,$fechaNacimiento,$edad,$direccion,$telefono,$nivelEducativo,$ocupacion);
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


}
