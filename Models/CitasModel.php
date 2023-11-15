<?php
class CitasModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getPacientes(){
        $sql = "SELECT * FROM pacientes WHERE estado=1";
        return $this->selectAll($sql);
    }

    public function getDatos($table){
        $sql = "SELECT COUNT(* ) as total FROM $table ";
        return $this->select($sql);
    }

    // public function getVerificar($item,$identificacion,$id)  {
    //     if ($id > 0) {
    //         $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion' AND id !=$id  ";
    //     } else {
    //         $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion'";
    //     }
    //     return $this->select($sql);
    // }

    // public function registrar($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$seccion,$arma,$novedad){
    //     $sql = "INSERT INTO personal_dispensario (id_grado,identificacion,fecha_nacimiento,apellidos,nombres,telefono,correo,id_especialidad,id_seccion,id_arma,novedad) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    //     $datos= array($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$seccion,$arma,$novedad);
    //     return $this->insertar($sql,$datos);
    // }
    // public function eliminar($id){
    //     $sql = "UPDATE  personal_dispensario SET estado = ? WHERE id = ?";
    //     $datos= array(0,$id);
    //     return $this->save($sql,$datos);
    // }

    // public function modificar($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$seccion,$arma,$novedad,$id){
    //     $sql = "UPDATE personal_dispensario  SET id_grado =?,identificacion=?,fecha_nacimiento=?,apellidos=?,nombres=?,telefono=?,correo=?,id_especialidad=?,id_seccion=?,id_arma=?,novedad=?  WHERE id =?";
    //     $datos= array($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$seccion,$arma,$novedad,$id);
    //     return $this->save($sql,$datos);
    // }

    
}

?>