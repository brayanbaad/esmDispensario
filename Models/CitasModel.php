<?php
class CitasModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getPacientes(){
        $sql = "SELECT * FROM pacientes WHERE estado=1 ORDER BY identificacion";
        return $this->selectAll($sql);
    }
    public function DatosPaciente($id){
        $sql = "SELECT identificacion,nombres,apellidos FROM pacientes WHERE identificacion = $id";
        return $this->select($sql);
    }
    public function getDatos($table){
        $sql = "SELECT COUNT(* ) as total FROM $table ";
        return $this->select($sql);
    }
    public function registrar($start,$end,$id,$title,$description,$color){
        $sql = "INSERT INTO citas (start,end,id,title,description,color) VALUES (?,?,?,?,?,?,?)";
        $datos= array($start,$end,$id,$title,$description,$color);
        return $this->insertar($sql,$datos);
    }
    public function listarCitas(){
        $sql = "SELECT idC,start,end,id,title,description,color from citas";
        return $this->selectAll($sql);
    }
    
    // public function getVerificar($item,$identificacion,$id)  {
    //     if ($id > 0) {
    //         $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion' AND id !=$id  ";
    //     } else {
    //         $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion'";
    //     }
    //     return $this->select($sql);
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