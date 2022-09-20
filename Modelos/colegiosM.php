<?php

    require_once "ConexionBD.php";

    class ColegiosM extends ConexionBD{
        //crear consultas
        static public function CrearColegiosM($tablaBD, $consulta){
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

        static public function VerColegiosM($tablaBD, $columna, $valor){
            if($columna == null){
                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY id ASC");
                $pdo -> execute();
                return $pdo -> fetchAll();
            }else{
                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");
                $pdo -> bindParam(":".$columna, $valor, PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
            }
            
        }

        //borrar consultas

        static public function BorrarColegiosM($tablaBD, $id){

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

        //editar consultas
        static public function EditarColegiosM($tablaBD, $id){
            $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre FROM $tablaBD WHERE id = :id");
            $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
            $pdo = null;
        }

        //actualizar consultas
        static public function ActualizarColegiosM($tablaBD, $datosC){
            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            
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