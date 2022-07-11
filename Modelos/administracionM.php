<?php

require_once "ConexionBD.php";

    class AdministracionM extends ConexionBD{

        //ingreso administracion
        static public function IngresarAdministracionM($tablaBD, $datosC){
                
                $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, apellido, nombre, foto, rol, id FROM $tablaBD 
                WHERE usuario = :usuario");
    
                $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
                $pdo -> close();
                $pdo = null;
    

        }

    }


?>