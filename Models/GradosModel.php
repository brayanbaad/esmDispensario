<?php
class GradosModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getGrados(){
        $sql = "SELECT id,nombre,nombreCorto,estado FROM grados ";
        return $this->selectAll($sql);
    }
    public function getGrado($id){
        $sql = "SELECT id,nombre,nombreCorto,estado FROM grados WHERE id = $id ";
        return $this->select($sql);
    }

    public function getVerificar($item,$nombre,$id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM grados WHERE $item = '$nombre' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM grados WHERE $item = '$nombre'";
        }
        return $this->select($sql);
    }

    public function registrar($nombre,$nombreCorto){
        $sql = "INSERT INTO grados (nombre,nombreCorto) VALUES (?,?)";
        $datos= array($nombre,$nombreCorto);
        return $this->insertar($sql,$datos);
    }

    public function eliminar($id) {
        $sql = "UPDATE grados SET estado = ? WHERE id = ?";
        $datos= array(0 , $id);
        return $this->save($sql,$datos);
    }

    public function modificar($nombre,$nombreCorto,$id){
        $sql = "UPDATE grados SET nombre =?, nombreCorto=? WHERE id=?";
        $datos= array($nombre,$nombreCorto,$id);
        return $this->save($sql,$datos);
    }

    public function accionGrado( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE grados SET estado= ? WHERE id = ?";
        $datos = array($this->estado,$this->id);
        $data = $this->save($sql,$datos);
        return $data;
    }
    

}

?>