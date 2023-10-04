<?php
class PacientesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProgramas(){
        $sql = "SELECT * FROM programas WHERE estado=1";
        return $this->selectAll($sql);
    }

    public function getGradosPersonal(){
        $sql = "SELECT * FROM personal_dispensario WHERE estado=1";
        return $this->selectAll($sql);
    }
    public function getpersonal(){
        $sql = "SELECT p.*, pr.nombre as programa, pd.nombres AS persona FROM personal_acceso p INNER JOIN programas pr ON p.id_programa = pr.id INNER JOIN personal_dispensario pd ON p.id_persona = pd.id WHERE p.id_programa = pr.id AND p.id_persona = pd.id;";
        return $this->selectAll($sql);
    }

    public function getVerificar($item,$nombre){
        if ($id > 0) {
            $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM personal_dispensario WHERE $item = '$identificacion'";
        }
        return $this->select($sql);
    }

    public function registrar($nombre,$apellido,$correo,$direccion,$telefono,$clave,$rol){
        $sql = "INSERT INTO personal_acceso (nombre,apellido,correo,direccion,telefono,clave,rol) VALUES (?,?,?,?,?,?,?)";
        $datos= array($nombre,$apellido,$correo,$direccion,$telefono,$clave,$rol);
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

    public function accionPersonalAcceso( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE personal_acceso SET estado= ? WHERE id = ?";
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
