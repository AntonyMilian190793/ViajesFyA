<?php

class ConexionBD{

    public static function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=viajesfya", "root", "");
        $bd->exec("SET CHARACTER SET utf8mb4");
        return $bd;
    }
}

?>
