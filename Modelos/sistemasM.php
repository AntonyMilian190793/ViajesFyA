<?php


    require_once "ConexionBD.php";

    class SistemasM extends ConexionBD{

        //ingreso  sistemas
        static public function IngresarSistemasM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave, nombre, apellido, sexo, foto, rol FROM $tablaBD WHERE usuario = :usuario");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->execute();
            return  $pdo-> fetch();
            $pdo->close();
            $pdo = null;
        }

                //crear Otros trabajadores
        static public function CrearSistemasM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(apellido, nombre, documento, usuario, sexo, id_consulta, clave, rol) VALUES 
            (:apellido, :nombre, :documento, :usuario, :sexo, :id_consulta, :clave, :rol)");

            $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":documento", $datosC["documento"], PDO::PARAM_STR);
            $pdo->bindParam(":sexo", $datosC["sexo"], PDO::PARAM_STR);
            $pdo->bindParam(":id_consulta", $datosC["id_consulta"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo -> bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);

            if($pdo -> execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;
    }

            static public function SistemaM($tablaBD, $columna, $valor){
                
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
        static public function ActualizarSistemasM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET usuario = :usuario, clave = :clave, nombre = :nombre, 
            apellido = :apellido, sexo = :sexo WHERE id = :id");

            $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo->bindParam(":sexo", $datosC["sexo"], PDO::PARAM_STR);



            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        
        }

        //eliminar secretaria
    static public function BorrarSistemasM($tablaBD, $id){
        $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);

        if($pdo -> execute()){
            return true;
        }
        else{
            return false;
        }
        $pdo -> close();
        $pdo = null;
    }

            //ver otros trabajadores
    static public function VerSistemasM($tablaBD, $columna, $valor){

        if($columna == null){
            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY nombre ASC");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }else{
            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna ORDER BY nombre ASC");
            $pdo -> bindParam(":".$columna, $valor, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }
        $pdo -> close();
        $pdo = null;
    }

        //ver perfil sistemas
        static public function VerPefilSistemasM($tablaBD, $id){

            $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, documento, id, id_consulta FROM $tablaBD WHERE id = :id");

            $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
            $pdo->execute();
            return  $pdo-> fetch();
            $pdo->close();
            $pdo = null;
        }
        

        //actualizar perfil sistemas
        static public function ActualizarPerfilSistemasM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET usuario = :usuario, clave = :clave, nombre = :nombre, apellido = :apellido, foto = :foto WHERE id = :id");

            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        }

    }

?>