<?php

    require_once "../Controladores/otrosC.php";
    require_once "../Modelos/otrosM.php";

    class OtrosA{

        public $Sid;

        public function EOtrosA(){
            $columna = "id";
            $valor = $this->Sid;

            $resultado = OtrosC::OtroC($columna, $valor);
            echo json_encode($resultado);
        }
    }

    if(isset($_POST["Sid"])){
        $eD = new OtrosA();
        $eD -> Sid = $_POST["Sid"];
        $eD -> EOtrosA();
    }

?>