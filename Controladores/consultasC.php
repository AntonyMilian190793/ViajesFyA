<?php

    class ConsultasC{
        //crear consultas

        public function CrearConsultasC(){

            if(isset($_POST["consultasN"])){

                $tablaBD = "consultas";
                $consulta = array("nombre" => $_POST["consultasN"]);
                $resultado = ConsultasM::CrearConsultaM($tablaBD, $consulta);

                if($resultado == true){
                    echo '<script>

                    window.location = "http://localhost/ViajesFyA/consultas";
                    </script>';

                }
            }
        }
    }


?>