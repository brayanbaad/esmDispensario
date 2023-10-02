<?php
    class Views{
        public function getView($pagina,$vista,$data=""){
            $pagina = get_class($pagina);
            if ($pagina=="Home") {
                $vista = "Views/".$vista.".php";
            }else{
                $vista = "Views/".$pagina."/".$vista.".php";
            }
            require $vista;
        }
    }

?>