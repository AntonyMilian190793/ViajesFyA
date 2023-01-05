<?php

require_once "ConexionBD.php";

    //ingreso otros
    class OtrosM extends ConexionBD{
        
        static public function IngresarOtrosM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, documento ,apellido, foto, rol, id FROM $tablaBD 
            WHERE usuario = :usuario");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
            $pdo = null;

        }

        static public function OtroM($tablaBD, $columna, $valor){
                
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
        static public function ActualizarSecretariaM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET usuario = :usuario, clave = :clave, nombre = :nombre, documento = :documento, 
            apellido = :apellido, sexo = :sexo WHERE id = :id");

            $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documento"], PDO::PARAM_STR);
            $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo->bindParam(":sexo", $datosC["sexo"], PDO::PARAM_STR);



            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        
        }



    //ver perfil otros
    static public function VerPefilOtrosM($tablaBD, $id){
        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, documento ,apellido, foto, rol, id FROM $tablaBD 
        WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
        $pdo -> execute();
        return $pdo -> fetch();
        $pdo -> close();
        $pdo = null;
    }

    //actualizar perfil otros

    static public  function ActualizarPerfilOtroM($tablaBD, $datosC){
        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET usuario = :usuario, clave = :clave, nombre = :nombre, 
        documento = :documento, apellido = :apellido, foto = :foto  WHERE id = :id");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":documento", $datosC["documento"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return true;
        }
        else{
            return false;
        }


        $pdo -> close();
        $pdo = null;
    }

    //mostrar secretarias
    static public function VerOtrosM($tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY nombre ASC");
        $pdo -> execute();
        return $pdo -> fetchAll();
        $pdo -> close();
        $pdo = null;
    }

    static public function CrearSecretariaM($tablaBD, $datosC){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, apellido, usuario, documento, clave, rol) VALUES (:nombre, :apellido, :usuario, :documento, :clave, :rol)");

        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":documento", $datosC["documento"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
        $pdo -> bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return true;
        }
        else{
            return false;
        }
        $pdo -> close();
        $pdo = null;
    }

    //eliminar secretaria
    static public function BorrarSecretariaM($tablaBD, $id){
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

           //ver administracion
       static public function VerOtroM($tablaBD, $columna, $valor){

        if($columna == null){
            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY apellido ASC");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }else{
            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna ORDER BY apellido ASC");
            $pdo -> bindParam(":".$columna, $valor, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }
        $pdo -> close();
        $pdo = null;
    }
        
}

?>