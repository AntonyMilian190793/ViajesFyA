<?php

require_once "ConexionBD.php";

class ColaboradorM extends ConexionBD{

    //ingreso colaborador
    // static public function IngresarColaboradorM($tablaBD, $datosC){
            
    //         $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, apellido, nombre, sexo, documento, foto, rol, id, id_consulta FROM $tablaBD 
    //         WHERE usuario = :usuario");

    //         $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
    //         $pdo -> execute();
    //         return $pdo -> fetch();
    //         $pdo -> close();
    //         $pdo = null;
    // }

    //ver perfil colaborador
    static public function VerPerfilColaboradorM($tablaBD, $id){
        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, documento, foto, rol, id, id_consulta FROM $tablaBD 
        WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
        $pdo -> execute();
        return $pdo -> fetch();
        $pdo -> close();
        $pdo = null;
    }

           //actualizar perfil colaborador
           static public function ActualizarPerfilColaboradorM($tablaBD, $datosC){

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

}    
?>