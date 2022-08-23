<?php

class ColaboradorC{

    //imngreso colaborador
    public function IngresoColaboradorC(){

        $tablaBD = "colaboradores";
        $datosC = array("usuario "=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);
        $rsultado = ColaboradorM::IngresoColaboradorM($tablaBD,$datosC);    
    }
}



?>