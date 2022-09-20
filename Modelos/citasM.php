<?php

    require_once "ConexionBD.php";

    class CitasM extends ConexionBD{

        //pedir vuelo
        static public function EnviarCitaM($tablaBD, $datosC){
            
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, id_administracion, nyaP, documento, inicio, fin)
            VALUES (:id_padre, :id_consulta, :id_administracion, :nyaP, :documento, :inicio, :fin)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);
            $pdo->bindParam(":id_administracion", $datosC["Pid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nyaC"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoC"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }
    
            $pdo -> close();
            $pdo = null;
    
        }

        //ver citas
        static public function VerCitasM($tablaBD){
            
            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");
            $pdo->execute();
            return $pdo->fetchAll();
    
            $pdo -> close();
            $pdo = null;
    
        }

        //pedir citas de Padre
        static public function PedirCitaPadreM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, nyaP, documento, inicio, fin)
            VALUES (:id_padre, :id_consulta, :nyaP, :documento, :inicio, :fin)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nombreP"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoP"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;

        }

        ////pedir cita logistica
        static public function PedirCitaLogisticaM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, nyaP, documento, inicio, fin, colegio, comentario, color)
            VALUES (:id_padre, :id_consulta, :nyaP, :documento, :inicio, :fin, :colegio, :comentario, :color)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nombreP"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoP"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);
            $pdo->bindParam(":colegio", $datosC["nombreCo"], PDO::PARAM_STR);
            $pdo->bindParam(":comentario", $datosC["comentario"], PDO::PARAM_STR);
            $pdo->bindParam(":color", $datosC["color"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;

            
        }

                ////pedir cita colaboradores
        static public function PedirCitaColaboradoresM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, nyaP, documento, inicio, fin, colegio, comentario, color)
            VALUES (:id_padre, :id_consulta, :nyaP, :documento, :inicio, :fin, :colegio, :comentario, color)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nombreP"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoP"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);
            $pdo->bindParam(":colegio", $datosC["nombreCo"], PDO::PARAM_STR);
            $pdo->bindParam(":comentario", $datosC["comentario"], PDO::PARAM_STR);
            $pdo->bindParam(":color", $datosC["color"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;

        }

        static public function CitaM($tablaBD, $columna, $valor){
                
            if($columna != null){

                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");
                $pdo->bindParam(":" .$columna, $valor, PDO::PARAM_STR);
                $pdo->execute();
                return $pdo->fetch();
            }

            $pdo -> close();
            $pdo = null;

        }
    }    


?>