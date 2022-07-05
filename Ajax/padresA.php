<?php

    require_once "../Controladores/padresC.php";
    require_once "../Modelos/padresM.php";

    class PadresA{

        public $Pid;

        public function EPadresA(){
            $columna = "id";
            $valor = $this->Pid;

            $resultado = PadresC::PadreC($columna, $valor);
            echo json_encode($resultado);
        }
    }

    if(isset($_POST["Pid"])){
        $eD = new PadresA();
        $eD -> Pid = $_POST["Pid"];
        $eD -> EPadresA();
    }

?>