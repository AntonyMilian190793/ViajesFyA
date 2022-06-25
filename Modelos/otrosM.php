<?php

    require_once "ConexionBD.php";

    class OtrosM extends ConexionBD{
        
        static public function IngresarOtrosM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, ");

        }
        
    }

?>