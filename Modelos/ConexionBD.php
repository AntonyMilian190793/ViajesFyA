<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=viajesfya", "root", "");

        $bd->exec("SET lc_time_names = 'es_PE'");
        return $bd;
    }
}

?>
