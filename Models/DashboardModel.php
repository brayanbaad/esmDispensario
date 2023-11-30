<?php
class DashboardModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getDatos($table){
        $sql = "SELECT COUNT(*) as total FROM $table ";
        return $this->select($sql);
    }

    public function getFecha(){
        $sql = "SELECT COUNT(*) as total FROM citas WHERE start = DATE(NOW())";
        return $this->select($sql);
    }
    public function getFechaPasadas(){
        $sql = "SELECT COUNT(*) as total FROM citas WHERE start < DATE(NOW())";
        return $this->select($sql);
    }
    public function getFechaFuturas(){
        $sql = "SELECT COUNT(*) as total FROM citas WHERE start > DATE(NOW()+1)";
        return $this->select($sql);
    }
    public function getGrados(){
        $sql = "SELECT pd.* ,g.nombreCorto as grado, COUNT(*) as cantidad, (COUNT(*) * 100.0 / (SElECT COUNT(*) FROM personal_dispensario)) as porcentaje FROM personal_dispensario pd INNER JOIN grados g ON PD.id_grado=g.id WHERE pd.id_grado = g.id GROUP BY id_grado;";
        return $this->selectAll($sql);
    }
    
    public function getEspecialidades(){
        $sql = "SELECT pd.* ,e.nombre as especialidad,COUNT(*) as cantidad FROM personal_dispensario pd INNER JOIN especialidades e ON PD.id_especialidad=e.id WHERE pd.id_especialidad = e.id GROUP BY id_especialidad;";
        return $this->selectAll($sql);
    }

    public function getHoras(){
        $sql = "SELECT c.end , COUNT(*) as cantidad FROM citas c GROUP BY end;";
        return $this->selectAll($sql);
    }


    

}

?>