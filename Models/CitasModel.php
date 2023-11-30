<?php
class CitasModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function DatosPaciente($id){
        $sql = "SELECT id,identificacion,nombres,apellidos FROM pacientes WHERE identificacion = $id";
        return $this->select($sql);
    }
    public function getDatos($table){
        $sql = "SELECT COUNT(* ) as total FROM $table ";
        return $this->select($sql);
    }
    public function getHorarios(){
        $sql ="SELECT * FROM horarios";
        $data =$this->selectAll($sql);
        return $data;
    }
    public function getVerificar($itemStart,$start,$itemEnd,$end,$id)  {
        if ($id== 0) {
            $sql = "SELECT * FROM citas WHERE  start =$itemStart AND $itemEnd != end AND id !=$id ";
        } else {
            $sql = "SELECT end  FROM citas WHERE $itemEnd=$end ";
        }
        return $this->select($sql);
    }
    public function registrar($start,$end,$id,$color){
        $sql = "INSERT INTO citas (start,end,id_paciente,color) VALUES (?,?,?,?)";
        $datos= array($start,$end,$id,$color);
        return $this->insertar($sql,$datos);
    }
    public function modificar($start,$end,$id_paciente,$color,$id){
        $sql = "UPDATE citas SET start=?, end=?, id_paciente=?, color=? WHERE id=?";
        $datos= array($start,$end,$id_paciente,$color,$id);
        return $this->save($sql,$datos);
    }
    public function eliminar($id){
        $sql = "DELETE  FROM citas  WHERE id=?";
        $datos= array($id);
        return $this->save($sql,$datos);
    }
    public function drop($id,$start){
        $sql = "UPDATE citas SET start=? WHERE id=?";
        $datos= array($start,$id);
        return $this->save($sql,$datos);
    }
    public function listarCitas(){
        $sql = "SELECT c.id,c.start,c.end, c.id_paciente as groupId,c.color,c.estado,  p.identificacion as department, p.nombres as title, p.apellidos as description from citas c INNER JOIN pacientes p ON c.id_paciente = p.id WHERE c.id_paciente = p.id;;";
        return $this->selectAll($sql);
    }

    


    

    
}

?>