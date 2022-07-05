<?php

    require_once "ConexionBD.php";

    class PadresM extends ConexionBD{

        //crear padres
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

        //mostar Padres

        static public function VerPadresM($tablaBD, $columna, $valor){
                
                if($columna != null){
    
                    $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");
                    $pdo->bindParam(":$columna", $valor, PDO::PARAM_STR);
                    $pdo->execute();
                    return $pdo->fetchAll();
    
                }else{
    
                    $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");
                    $pdo->execute();
                    return $pdo->fetchAll();
    
                }
                $pdo -> close();
                $pdo = null;
    
        }

        //editar Padre

        static public function PadreM($tablaBD, $columna, $valor){
                
            if($columna != null){

                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");
                $pdo->bindParam(":$columna", $valor, PDO::PARAM_STR);
                $pdo->execute();
                return $pdo->fetch();
            }

            $pdo -> close();
            $pdo = null;

        }

    }
