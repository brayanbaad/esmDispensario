<?php
class ProgramasModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getProgramas(){
        $sql = "SELECT id,nombre,estado FROM programas ";
        return $this->selectAll($sql);
    }
    public function getPrograma($id){
        $sql = "SELECT id,nombre,estado FROM programas WHERE id = $id ";
        return $this->select($sql);
    }

    public function getVerificar($item,$nombre,$id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM programas WHERE $item = '$nombre' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM programas WHERE $item = '$nombre'";
        }
        return $this->select($sql);
    }

    public function registrar($nombre){
        $sql = "INSERT INTO programas (nombre) VALUES (?)";
        $datos= array($nombre);
        return $this->insertar($sql,$datos);
    }

    public function eliminar($id) {
        $sql = "UPDATE programas SET estado = ? WHERE id = ?";
        $datos= array(0 , $id);
        return $this->save($sql,$datos);
    }

    public function modificar($nombre,$id){
        $sql = "UPDATE programas SET nombre =? WHERE id=?";
        $datos= array($nombre,$id);
        return $this->save($sql,$datos);
    }
    
    public function accionPrograma( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE programas SET estado= ? WHERE id = ?";
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