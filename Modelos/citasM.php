<?php

    require_once "ConexionBD.php";

    class CitasM extends ConexionBD{

        //pedir vuelo
        static public function EnviarCitaM($tablaBD, $datosC){
            
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, id_administracion, documento, inicio, fin)
            VALUES (:id_padre, :id_consulta, :id_administracion, :documento, :inicio, :fin)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);
            $pdo->bindParam(":id_administracion", $datosC["Pid"], PDO::PARAM_INT);

            $pdo->bindParam(":documento", $datosC["documentoC"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }
    
            $pdo -> close();
            $pdo = null;
    
        }
    }    



?>