<?php

require_once "ConexionBD.php";

    class AdministracionM extends ConexionBD{

        //ingreso administracion
        static public function IngresarAdministracionM($tablaBD, $datosC){
                
                $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, apellido, nombre, documento, foto, rol, id FROM $tablaBD 
                WHERE usuario = :usuario");
    
                $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
                $pdo -> close();
                $pdo = null;
    

        }

        //ver perfil administracion
       static public function VerPefilAdministracionM($tablaBD, $id){

        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, apellido, nombre, documento, foto, rol, id FROM $tablaBD 
        WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
        $pdo -> execute();
        return $pdo -> fetch();
        $pdo -> close();
        $pdo = null;
        
       }

       //actualizar perfil administracion
       static public function ActualizarPerfilAdministracionM($tablaBD, $datosC){

        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET usuario = :usuario, clave = :clave, apellido = :apellido, 
        nombre = :nombre, foto = :foto WHERE id = :id");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);
        
        if($pdo -> execute()){
            return true;
        }

        $pdo -> close();
        $pdo = null;
        
       }

       //ver administracion
       static public function VerAdministracionM($tablaBD, $columna, $valor){

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

    //ver trabajadores administracion 
    static public function VerAdministracionTM($tablaBD){
            
            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY apellido ASC");
            $pdo -> execute();
            return $pdo -> fetchAll();
            $pdo -> close();
            $pdo = null;
        
    }

    //crear  trabajaores administracion
    static public function CrearAdministracionM($tablaBD, $datosC){

    $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(apellido, nombre, documento ,sexo, id_consulta, usuario, clave, rol) VALUES 
    (:apellido, :nombre, :documento, :sexo, :id_consulta, :usuario, :clave, :rol)");

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

    //eliminar trabajadore
    static public function BorrarAdministracionM($tablaBD, $id){
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

    static public function AdministracionnM($tablaBD, $columna, $valor){
                
            if($columna != null){

                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");
                $pdo->bindParam(":" .$columna, $valor, PDO::PARAM_STR);
                $pdo->execute();
                return $pdo->fetch();
            }

            $pdo -> close();
            $pdo = null;

        }

        static function ActualizarAdministracionM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre, apellido = :apellido, usuario = :usuario, clave = :clave WHERE id = :id");

            $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);


            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        }


}


?>