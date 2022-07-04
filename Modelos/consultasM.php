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

        //ver consultas

        static public function VerConsultasM($tablaBD, $columna, $valor){
            if($columna == null){
                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");
                $pdo -> execute();
                return $pdo -> fetchAll();
            }else{
                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");
                $pdo -> bindParam(":$columna", $valor, PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
            }
            
        }

        //borrar consultas

        static public function BorrarConsultasM($tablaBD, $id){

            $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $id, PDO::PARAM_INT);

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