<?php

require_once "ConexionBD.php";

    //ingreso otros
    class OtrosM extends ConexionBD{
        
        static public function IngresarOtrosM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id FROM $tablaBD 
            WHERE usuario = :usuario");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> close();
            $pdo = null;

        }



    //ver perfil otros
    static public function VerPefilOtrosC($tablaBD, $id){
        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id FROM $tablaBD 
        WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
        $pdo -> execute();
        return $pdo -> fetch();
        $pdo -> close();
        $pdo = null;
    }
        
}




?>