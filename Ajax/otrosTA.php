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

        public $Norepetir;

        public function NorepetirOtrosTA(){
            $columna = "usuario";
            $valor = $this->Norepetir;

            $resultado = OtrosTC::VerOtrosTC($columna, $valor);
            echo json_encode($resultado);
        }
    }

    if(isset($_POST["Pid"])){

        $editarOT = new OtrosTA();
        $editarOT -> Pid = $_POST["Pid"];
        $editarOT -> EOtrosTA();
    }

    if(isset($_POST["Norepetir"])){

        $noRepetirOT = new OtrosTA();
        $noRepetirOT -> Norepetir = $_POST["Norepetir"];
        $noRepetirOT -> NorepetirOtrosTA();
    }

?>