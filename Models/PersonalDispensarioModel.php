<?php
class PersonalDispensarioModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getCargosPersonal(){
        $sql = "SELECT * FROM cargos WHERE estado=1";
        return $this->selectAll($sql);
    }
    public function getEspecialidadPersonal(){
        $sql = "SELECT * FROM especialidades WHERE estado=1";
        return $this->selectAll($sql);
    }
    public function getSeccionPersonal(){
        $sql = "SELECT * FROM secciones WHERE estado=1";
        return $this->selectAll($sql);
    }
    public function getGradosPersonal(){
        $sql = "SELECT * FROM grados WHERE estado=1";
        return $this->selectAll($sql);
    }

    public function getPersonasDispensario(){
        $sql = "SELECT P.*, g.nombreCorto as grado, e.nombre AS especialidad, c.nombre as cargo , s.nombre as seccion FROM personal_dispensario P INNER JOIN grados g ON p.id_grado = g.id INNER JOIN especialidades e ON p.id_especialidad = e.id INNER JOIN cargos c ON p.id_cargo = c.id INNER JOIN secciones s ON p.id_seccion = s.id WHERE p.id_grado = g.id And p.id_especialidad = e.id And p.id_cargo = c.id and p.id_seccion = s.id;";
        return $this->selectAll($sql);
    }

    public function getPersonaDispensario($id){
        $sql = "SELECT id,id_grado,identificacion,fecha_nacimiento,apellidos,nombres,telefono,correo,id_especialidad,id_cargo,id_seccion,arma,novedad  FROM personal_dispensario WHERE id = $id  ";
        return $this->select($sql);
    }

    public function getVerificar($item,$identificacion,$id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion'";
        }
        return $this->select($sql);
    }

    public function registrar($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad){
        $sql = "INSERT INTO personal_dispensario (id_grado,identificacion,fecha_nacimiento,apellidos,nombres,telefono,correo,id_especialidad,id_cargo,id_seccion,arma,novedad) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $datos= array($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad);
        return $this->save($sql,$datos);
    }
    public function eliminar($id){
        $sql = "UPDATE  personal_dispensario SET estado = ? WHERE id = ?";
        $datos= array(0,$id);
        return $this->save($sql,$datos);
    }

    public function modificar($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad,$id){
        $sql = "UPDATE personal_dispensario  SET id_grado =?,identificacion=?,fecha_nacimiento=?,apellidos=?,nombres=?,telefono=?,correo=?,id_especialidad=?,id_cargo=?,id_seccion=?,arma=?,novedad=?  WHERE id =?";
        $datos= array($grado,$identificacion,$fecha,$apellidos,$nombres,$telefono,$correo,$especialidad,$cargo,$seccion,$arma,$novedad,$id);
        return $this->save($sql,$datos);
    }

    public function accionPersonalDispensario( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE personal_dispensario SET estado= ? WHERE id = ?";
        $datos = array($this->estado,$this->id);
        $data = $this->save($sql,$datos);
        return $data;
    }
    public function verificarPermiso(int $id_user,string $nombre){
        $sql = "SELECT p.id, p.permiso, d.id, d.id_usuario, d.id_permiso FROM permisos p INNER JOIN detalle_permisos d ON p.id= d.id_permiso WHERE d.id_usuario = $id_user  AND p.permiso = '$nombre'";
        $data = $this->selectAll($sql);
        return $data;
    }
}

?>