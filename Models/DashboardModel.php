<?php
class DashboardModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    public function getDatos($table){
        $sql = "SELECT COUNT(* ) as total FROM $table ";
        return $this->select($sql);
    }
    

}

?>