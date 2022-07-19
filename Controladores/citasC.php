<?php

    class CitasC{

        //pedir cita
        public function EnviarCitaC(){

            if(isset($_POST["Did"])){

                $tablaBD = "vuelos";
                $Did = substr($_GET["url"], 6);
                $datosC = array("Did"=>$_POST["Did"], "Pid"=>$_POST["Pid"], "nyaC"=>$_POST["nyaC"], "Cid"=>$_POST["Cid"], 
                "documentoC"=>$_POST["documentoC"], "fyhIC"=>$_POST["fyhIC"], "fyhFC"=>$_POST["fyhFC"]);
                $resultado = CitasM::EnviarCitaM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>
                    window.location = "Padre/"'.$Did.';
                    </script>';
                }
            }
        }
    }




?>