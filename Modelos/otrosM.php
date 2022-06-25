<?php

require_once "ConexionBD.php";

    class OtrosM extends ConexionBD{
        
        static public function IngresarOtrosM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id FROM $tablaBD 
            WHERE usuario = :usuario");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
            $pdo = null;

        }
        
    }

?>