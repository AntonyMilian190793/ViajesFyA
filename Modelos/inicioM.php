<?php


require_once "ConexionBD.php";

    class InicioM extends ConexionBD {

        static public function MostrarInicioM($tablaBD, $id){

            $pdo = ConexionBD::cBD()->prepare("SELECT id, intro, horaE, horaS, direccion, telefono, correo, logo, favicon FROM $tablaBD 
            WHERE id = :id");

            $pdo->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo->execute();
            return $pdo->fetch();
            $pdo ->close();
            $pdo = null;

        }
    }



?>