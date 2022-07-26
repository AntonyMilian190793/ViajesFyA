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
                $pdo->bindParam(":" .$columna, $valor, PDO::PARAM_STR);
                $pdo->execute();
                return $pdo->fetch();
            }

            $pdo -> close();
            $pdo = null;

        }

        //actualizar Padres
        static public function ActualizarPadresM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET apellido = :apellido, nombre = :nombre, sexo = :sexo, 
            usuario = :usuario, clave = :clave WHERE id = :id");

            $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo->bindParam(":sexo", $datosC["sexo"], PDO::PARAM_STR);
            $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        
        }

        //eliminar Padres
        static public function BorrarPadresM($tablaBD, $id){

            $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo->bindParam(":id", $id, PDO::PARAM_INT);

            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        
        }

        //ingreso padres
        static public function IngresarPadreM($tablaBD, $datosC){
                
                $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, apellido, nombre, sexo, foto, rol, id FROM $tablaBD 
                WHERE usuario = :usuario");
    
                $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
                $pdo -> close();
                $pdo = null;
    

        }

        //ver perfil padres

        static public function VerPerfilPadreM($tablaBD, $id){

                $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, apellido, nombre, sexo, foto, rol, id, horarioE, horarioS, id_consulta FROM $tablaBD 
                WHERE id = :id");

                $pdo -> bindParam(":id", $id, PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
                $pdo -> close();
                $pdo = null;
        }

        //actualizar perfil padres
        static public function ActualizarPerfilPadreM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET id_consulta = :id_consulta, apellido = :apellido, nombre = :nombre, foto = :foto,
            usuario = :usuario, clave = :clave, horarioE = :horarioE, horarioS = :horarioS WHERE id = :id");

            $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["id_consulta"], PDO::PARAM_INT);
            $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo->bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);
            $pdo->bindParam(":horarioE", $datosC["horarioE"], PDO::PARAM_STR);
            $pdo->bindParam(":horarioS", $datosC["horarioS"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        }

    }
?>
