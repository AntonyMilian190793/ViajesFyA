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

        //ver consultas

        static public function VerConsultasC($columna, $valor){
            
            $tablaBD = "consultas";
            $resultado = ConsultasM::VerConsultasM($tablaBD, $columna, $valor);

            return $resultado;
        }
    }


?>