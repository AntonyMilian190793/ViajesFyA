<?php


require_once "../Controladores/administracionC.php";
require_once "../Modelos/administracionM.php";

class AdministracionA{

    public $Pid;

    public function EAdministracionA(){
        $columna = "id";
        $valor = $this->Pid;

        $resultado = AdministracionC::AdministracionnC($columna, $valor);
        echo json_encode($resultado);
    }
}

if(isset($_POST["Pid"])){
    $eC = new AdministracionA();
    $eC -> Pid = $_POST["Pid"];
    $eC -> EAdministracionA();
}
?>