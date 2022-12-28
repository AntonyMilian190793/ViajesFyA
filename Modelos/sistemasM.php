<?php


    require_once "ConexionBD.php";

    class SistemasM extends ConexionBD{

        //ingreso  sistemas

        static public function IngresarSistemasM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave, nombre, apellido, foto, rol FROM $tablaBD WHERE usuario = :usuario");

            $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
            $pdo->execute();
            return  $pdo-> fetch();
            $pdo->close();
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