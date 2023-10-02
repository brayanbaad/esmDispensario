<?php
class CargosModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getCargos(){
        $sql = "SELECT id,nombre,estado FROM cargos ";
        return $this->selectAll($sql);
    }
    public function getCargo($id){
        $sql = "SELECT id,nombre,estado FROM cargos WHERE id = $id ";
        return $this->select($sql);
    }

    public function getVerificar($item,$nombre,$id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM cargos WHERE $item = '$nombre' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM cargos WHERE $item = '$nombre'";
        }
        return $this->select($sql);
    }

    public function registrar($nombre){
        $sql = "INSERT INTO cargos (nombre) VALUES (?)";
        $datos= array($nombre);
        return $this->insertar($sql,$datos);
    }

    public function eliminar($id) {
        $sql = "UPDATE cargos SET estado = ? WHERE id = ?";
        $datos= array(0 , $id);
        return $this->save($sql,$datos);
    }

    public function modificar($nombre,$id){
        $sql = "UPDATE cargos SET nombre =? WHERE id=?";
        $datos= array($nombre,$id);
        return $this->save($sql,$datos);
    }
    
    public function accionCargo( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE cargos SET estado= ? WHERE id = ?";
        $datos = array($this->estado,$this->id);
        $data = $this->save($sql,$datos);
        return $data;
    }

}

?>