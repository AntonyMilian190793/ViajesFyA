<?php

    require_once "../Controladores/otrosTC.php";
    require_once "../Modelos/otrosTM.php";

    class OtrosTA{

        public $Pid;

        public function EOtrosTA(){
            $columna = "id";
            $valor = $this->Pid;

            $resultado = OtrosTC::VerOtrosTC($columna, $valor);
            echo json_encode($resultado);
        }
    }

    if(isset($_POST["Pid"])){

        $editarOT = new OtrosTA();
        $editarOT -> Pid = $_POST["Pid"];
        $editarOT -> EOtrosTA();
    }

?>