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

        //ver perfil sistemas
        static public function VerPerfilSistemasM($tablaBD, $id){

            $pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave, nombre, apellido, foto FROM $tablaBD WHERE id = :id");

            $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
            $pdo->execute();
            return  $pdo-> fetch();
            $pdo->close();
            $pdo = null;
        }
    }

?>