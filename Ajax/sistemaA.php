<?php

    require_once "../Controladores/sistemasC.php";
    require_once "../Modelos/sistemasM.php";

    class SistemasA{

        public $Sid;

        public function ESistemasA(){
            $columna = "id";
            $valor = $this->Sid;

            $resultado = SistemasC::SistemaC($columna, $valor);
            echo json_encode($resultado);
        }
    }

    if(isset($_POST["Sid"])){
        $eD = new SistemasA();
        $eD -> Sid = $_POST["Sid"];
        $eD -> ESistemasA();
    }

?>