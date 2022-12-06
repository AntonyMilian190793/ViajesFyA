<?php

    require_once "ConexionBD.php";

    class CitasM extends ConexionBD{

        //pedir vuelo
        static public function EnviarCitaM($tablaBD, $datosC){
            
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, id_administracion, nyaP, documento, inicio, fin)
            VALUES (:id_padre, :id_consulta, :id_administracion, :nyaP, :documento, :inicio, :fin)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);
            $pdo->bindParam(":id_administracion", $datosC["Pid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nyaC"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoC"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }
    
            $pdo -> close();
            $pdo = null;
    
        }

        //ver citas
        static public function VerCitasM($tablaBD){
            
            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");
            $pdo->execute();
            return $pdo->fetchAll();
    
            $pdo -> close();
            $pdo = null;
    
        }

        //ver citas
        static public function VerCitasCompletoM($tablaBD){
    
            $pdo = ConexionBD::cBD()->prepare("SELECT id, id_padre, id_consulta, id_logistica ,nyaP, documento, colegio, comentario, inicio, fin FROM $tablaBD");
            $pdo->execute();
            return $pdo->fetchAll();
    
            $pdo -> close();
            $pdo = null;
    
        }

        //ver citas detallado
        static public function VerCitasDetalladoM($tablaBD){
            
            $pdo = ConexionBD::cBD()->prepare("SELECT id, id_padre, id_consulta, id_logistica ,nyaP, documento, colegio, comentario, DATE_FORMAT(inicio, '%W %d de %M de %Y') AS inicio, DATE_FORMAT(inicio, '%h:%m:%s %p') AS Hora_Inicio, DATE_FORMAT(fin, '%W %d de %M de %Y') AS fin, DATE_FORMAT(fin, '%h:%m:%s %p') AS Hora_Fin, color FROM $tablaBD");
            $pdo->execute();
            return $pdo->fetchAll();
    
            $pdo -> close();
            $pdo = null;
    
        }


        //pedir citas de Padre
        static public function PedirCitaPadreM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, nyaP, documento, inicio, fin)
            VALUES (:id_padre, :id_consulta, :nyaP, :documento, :inicio, :fin)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nombreP"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoP"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;

        }

        ////pedir cita logistica
        static public function PedirCitaLogisticaM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, nyaP, documento, inicio, fin, colegio, comentario, color)
            VALUES (:id_padre, :id_consulta, :nyaP, :documento, :inicio, :fin, :colegio, :comentario, :color)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nombreP"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoP"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["inicio"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fin"], PDO::PARAM_STR);
            $pdo->bindParam(":colegio", $datosC["nombreCo"], PDO::PARAM_STR);
            $pdo->bindParam(":comentario", $datosC["comentario"], PDO::PARAM_STR);
            $pdo->bindParam(":color", $datosC["color"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;

            
        }

        //pedir cita colaboradores
        static public function PedirCitaColaboradoresM($tablaBD, $datosC){

            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_padre, id_consulta, nyaP, documento, inicio, fin, colegio, comentario, color)
            VALUES (:id_padre, :id_consulta, :nyaP, :documento, :inicio, :fin, :colegio, :comentario, color)");

            $pdo->bindParam(":id_padre", $datosC["Did"], PDO::PARAM_INT);
            $pdo->bindParam(":id_consulta", $datosC["Cid"], PDO::PARAM_INT);

            $pdo->bindParam(":nyaP", $datosC["nombreP"], PDO::PARAM_STR);
            $pdo->bindParam(":documento", $datosC["documentoP"], PDO::PARAM_STR);
            $pdo->bindParam(":inicio", $datosC["fyhIC"], PDO::PARAM_STR);
            $pdo->bindParam(":fin", $datosC["fyhFC"], PDO::PARAM_STR);
            $pdo->bindParam(":colegio", $datosC["nombreCo"], PDO::PARAM_STR);
            $pdo->bindParam(":comentario", $datosC["comentario"], PDO::PARAM_STR);
            $pdo->bindParam(":color", $datosC["color"], PDO::PARAM_STR);

            if($pdo->execute()){
                return true;
            }

            $pdo -> close();
            $pdo = null;

        }

        static public function CitaM($tablaBD, $columna, $valor){
                
            if($columna != null){

                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");
                $pdo->bindParam(":" .$columna, $valor, PDO::PARAM_STR);
                $pdo->execute();
                return $pdo->fetch();
            }

            $pdo -> close();
            $pdo = null;

        }


        static public function EditarCitasM($tablaBD){
            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD inicio = :inicio, fin = :fin, comentario = :comentario WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":inicio", $datosC["inicio"], PDO::PARAM_STR);
            $pdo -> bindParam(":fin", $datosC["fin"], PDO::PARAM_STR);
            $pdo -> bindParam(":comentario", $datosC["icomentariod"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return true;
        }

        $pdo -> close();
        $pdo = null;
        }


         static public function VerVuelosLogisticaM($tablaBD){
            
            $pdo = ConexionBD::cBD()->prepare("SELECT id ,nyaP, documento, colegio, DATE_FORMAT(inicio, '%W %d de %M de %Y') AS inicio, DATE_FORMAT(inicio, '%h:%m:%s %p') AS Hora_Inicio, DATE_FORMAT(fin, '%W %d de %M de %Y') AS fin, DATE_FORMAT(fin, '%h:%m:%s %p') AS Hora_Fin   FROM $tablaBD");
            $pdo->execute();
            return $pdo->fetchAll();
    
            $pdo -> close();
            $pdo = null;
    
        }


        //eliminar vueloslogistica
        static public function BorrarCitasM($tablaBD, $id){

            $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");
            $pdo->bindParam(":id", $id, PDO::PARAM_INT);

            if($pdo->execute()){
                return true;
            }

            $pdo->close();
            $pdo = null;
        
        }

    }    


?>