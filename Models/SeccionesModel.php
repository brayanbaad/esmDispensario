<?php
class SeccionesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getSecciones(){
        $sql = "SELECT id,nombre,estado FROM secciones ";
        return $this->selectAll($sql);
    }
    public function getSeccion($id){
        $sql = "SELECT id,nombre,estado FROM secciones WHERE id = $id ";
        return $this->select($sql);
    }

    public function getVerificar($item,$nombre,$id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM secciones WHERE $item = '$nombre' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM secciones WHERE $item = '$nombre'";
        }
        return $this->select($sql);
    }

    public function registrar($nombre){
        $sql = "INSERT INTO secciones (nombre) VALUES (?)";
        $datos= array($nombre);
        return $this->insertar($sql,$datos);
    }

    public function eliminar($id) {
        $sql = "UPDATE secciones SET estado = ? WHERE id = ?";
        $datos= array(0 , $id);
        return $this->save($sql,$datos);
    }

    public function modificar($nombre,$id){
        $sql = "UPDATE secciones SET nombre =? WHERE id=?";
        $datos= array($nombre,$id);
        return $this->save($sql,$datos);
    }

    public function accionSeccion( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE secciones SET estado= ? WHERE id = ?";
        $datos = array($this->estado,$this->id);
        $data = $this->save($sql,$datos);
        return $data;
    }
    

}

?>