<?php

    class OtrosTC{

        //crear Otros trabajadores
        public function CrearOtrosTC(){

            if(isset($_POST["rolOT"])){

                $tablaBD = "otrosTrabajadores";
                $datosC = array("apellido"=>$_POST["apellido"],"nombre"=>$_POST["nombre"],"documento"=>$_POST["documento"],
                "usuario"=>$_POST["usuario"],"clave"=>$_POST["clave"], "rol"=>$_POST["rolOT"]);

                $resultado = OtrosTM::CrearOtrosTM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>
                            window.location = "otrosTrabajadores";
                          </script>';
            }   
        }
    }
}

?>