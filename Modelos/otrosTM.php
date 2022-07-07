<?php

    require_once "ConexionBD.php";
    
    class OtrosTM extends ConexionBD{

        //crear Otros trabajadores
        static public function CrearOtrosTM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(apellido, nombre, documento, usuario, clave, rol) VALUES 
            (:apellido, :nombre, :documento, :usuario, :clave, :rol)");

            $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":documento", $datosC["documento"], PDO::PARAM_STR);
            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
            $pdo -> bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);

            if($pdo -> execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;
    }

    //ver otros trabajadores
    static public function VerOtrosTM($tablaBD, $columna, $valor){

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

    //borrar otros trabajadores
    static public function BorrarOtrosTM($tablaBD, $id){

        $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");
        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);

        if($pdo -> execute()){
            return true;
        }
        
        $pdo -> close();
        $pdo = null;
    }

    // actualizar otros trabajadores
    static public function ActualizarOtrosTM($tablaBD, $datosC){

        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET apellido = :apellido, nombre = :nombre, documento = :documento, 
        usuario = :usuario, clave = :clave WHERE id = :id");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":documento", $datosC["documento"], PDO::PARAM_STR);
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return true;
        }
        
        $pdo -> close();
        $pdo = null;
    }
    
}

?>