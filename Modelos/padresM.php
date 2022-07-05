<?php

    require_once "ConexionBD.php";

    class PadresM extends ConexionBD{

        static public function CrearPadresM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (apellido, nombre, sexo, id_consulta, usuario, clave, rol) VALUES 
            (:apellido, :nombre, :sexo, :id_consulta, :usuario, :clave, :rol)");

            $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo->bindParam(":sexo", $datosC["sexo"], PDO::PARAM_STR);
            $pdo->bindParam(":id_consulta", $datosC["id_consulta"], PDO::PARAM_STR);
            $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo->bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;

        }

    }
?>