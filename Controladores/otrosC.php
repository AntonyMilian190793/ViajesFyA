<?php

class OtrosC{

    public function IngresarOtrosC(){

        if(isset($_POST["usuario-Ing"])){

            if(preg_match('/^([a-zA-Z0-9]+$/', $_POST["usuario-Ing"]) && preg_match('/^([a-zA-Z0-9]+$/', $_POST["clave-Ing"])){

                $tablaBD = "otros";

                $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);

                $result = OtrosM::IngresarOtrosM($tablaBD, $datosC);

            }

            

        }

    }

}

?>