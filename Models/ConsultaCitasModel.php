<?php
class ConsultaCitasModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function listarCitas(){
        $sql = "SELECT c.id,c.start,c.end, c.id_paciente as groupId,c.color,c.estado,  p.identificacion as department, p.nombres as title, p.apellidos as description from citas c INNER JOIN pacientes p ON c.id_paciente = p.id WHERE c.id_paciente = p.id AND c.start = DATE(NOW()) ORDER BY c.end;";
        return $this->selectAll($sql);
    }
    public function getHoras(){
        $sql = "SELECT c.end , COUNT(*) as cantidad FROM citas c GROUP BY end;";
        return $this->selectAll($sql);
    }

    public function getfechas(){
        $sql = "SELECT c.start , COUNT(*) as cantidad FROM citas c GROUP BY start;";
        return $this->selectAll($sql);
    }
    public function accionEditarEstado( string $estado,int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE citas SET estado= ? WHERE id = ?";
        $datos = array($this->estado,$this->id);
        $data = $this->save($sql,$datos);
        return $data;
    }
}

?>