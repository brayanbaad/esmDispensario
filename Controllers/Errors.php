<?php
class Errors extends Controller{
    public function index() {
        $data['title'] ='Permisos';
        $this->views->getView($this,'index',$data);
    }

    public function permisos(){
        $this->views->getView($this,'permisos');
    }
}
?>