<?php


require_once "ConexionBD.php";

    class InicioM extends ConexionBD {

        static public function MostrarInicioM($tablaBD, $id){

            $pdo = ConexionBD::cBD()->prepare("SELECT id, intro, horaE, horaS, nombre, nombre1, direccion, telefono, telefono1, correo, correo1, logo, favicon FROM $tablaBD 
            WHERE id = :id");

            $pdo->bindParam(":id", $id, PDO::PARAM_INT);
            $pdo->execute();
            return $pdo->fetch();
            $pdo ->close();
            $pdo = null;

        }

        //ctulizar inicio
	static public function ActualizarInicioM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET intro = :intro, direccion = :direccion, nombre = :nombre, nombre1 = :nombre1, telefono = :telefono, correo = :correo, telefono1 = :telefono1, correo1 = :correo1, logo = :logo, favicon = :favicon WHERE id = :id");

		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam(":intro", $datosC["intro"], PDO::PARAM_STR);
		$pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
		$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
		$pdo -> bindParam(":telefono", $datosC["telefono"], PDO::PARAM_STR);
		$pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
		$pdo -> bindParam(":nombre1", $datosC["nombre1"], PDO::PARAM_STR);
		$pdo -> bindParam(":correo1", $datosC["correo1"], PDO::PARAM_STR);
		$pdo -> bindParam(":telefono1", $datosC["telefono1"], PDO::PARAM_STR);
		$pdo -> bindParam(":correo1", $datosC["correo1"], PDO::PARAM_STR);
		$pdo -> bindParam(":logo", $datosC["logo"], PDO::PARAM_STR);
		$pdo -> bindParam(":favicon", $datosC["favicon"], PDO::PARAM_STR);


		if($pdo -> execute()){
			return true;
		}

		$pdo->close();
		$pdo = null;

	}
}



?>