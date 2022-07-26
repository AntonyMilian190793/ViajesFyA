<?php


    require_once "ConexionBD.php";

    class SistemasM extends ConexionBD{

        //ingreso  sistemas

        static public function IngresarSistemasM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave, nombre, apellido, foto, rol FROM $tablaBD WHERE usuario = :usuario");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->execute();
            return  $pdo-> fetch();
            $pdo->close();
            $pdo = null;
        }

    }

?>