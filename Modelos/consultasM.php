<?php

    require_once "ConexionBD.php";

    class ConsultasM extends ConexionBD{
        //crear consultas
        static public function CrearConsultaM($tablaBD, $consulta){
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(nombre) VALUES (:nombre)");
            $pdo -> bindParam(":nombre", $consulta["nombre"], PDO::PARAM_STR);

            if($pdo -> execute()){

                return true;
            }else{
                return false;
            }

            $pdo -> close();
            $pdo = null;
        }

    }


?>