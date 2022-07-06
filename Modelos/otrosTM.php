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
}

?>