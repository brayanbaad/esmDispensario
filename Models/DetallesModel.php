<?php
class DetallesModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getPacientes(){
        $sql = "SELECT * FROM pacientes ";
        return $this->selectAll($sql);
    }
    public function getDetallePaciente($id){
        $sql ="SELECT * FROM pacientes  WHERE id=$id";
        $data =$this->selectAll($sql);
        return $data;
    }
}

?>