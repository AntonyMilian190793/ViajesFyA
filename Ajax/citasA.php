<?php


require_once "../Controladores/citasC.php";
require_once "../Modelos/citasM.php";

class CitasA{

    public $Pid;

    public function ECitasA(){
        $columna = "id";
        $valor = $this->Pid;

        $resultado = CitasC::CitaC($columna, $valor);
        echo json_encode($resultado);
    }
}

if(isset($_POST["Pid"])){
    $eC = new CitasA();
    $eC -> Pid = $_POST["Pid"];
    $eC -> ECitasA();
}
?>