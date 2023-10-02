<?php
class EspecialidadesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getEspecialidades(){
        $sql = "SELECT id,nombre,estado FROM especialidades ";
        return $this->selectAll($sql);
    }
    public function getEspecialidad($id){
        $sql = "SELECT id,nombre,estado FROM especialidades WHERE id = $id ";
        return $this->select($sql);
    }

    public function getVerificar($item,$nombre,$id)  {
        if ($id > 0) {
            $sql = "SELECT id FROM especialidades WHERE $item = '$nombre' AND id !=$id  ";
        } else {
            $sql = "SELECT id FROM especialidades WHERE $item = '$nombre'";
        }
        return $this->select($sql);
    }

    public function registrar($nombre){
        $sql = "INSERT INTO especialidades (nombre) VALUES (?)";
        $datos= array($nombre);
        return $this->insertar($sql,$datos);
    }

    public function eliminar($id) {
        $sql = "UPDATE especialidades SET estado = ? WHERE id = ?";
        $datos= array(0 , $id);
        return $this->save($sql,$datos);
    }

    public function modificar($nombre,$id){
        $sql = "UPDATE especialidades SET nombre =? WHERE id=?";
        $datos= array($nombre,$id);
        return $this->save($sql,$datos);
    }

    public function accionEspecialidad( int $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE especialidades SET estado= ? WHERE id = ?";
        $datos = array($this->estado,$this->id);
        $data = $this->save($sql,$datos);
        return $data;
    }
    

}

?>