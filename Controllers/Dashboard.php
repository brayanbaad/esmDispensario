<?php
class Dashboard extends Controller
{
    public function __construct() {
        session_start();  
        parent::__construct();
    }

    public function index()  {
        if (empty($_SESSION['activo'])) {
            header("location:". BASE_URL);
        }
        $data['title'] ='Dashboard';
        $this->views->getView($this,'index',$data);
    }


}