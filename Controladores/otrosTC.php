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
                    echo 
                    '<script>
                            window.location = "otrosTrabajadores";
                    </script>';
            }   
        }
    }

    // ver otros trabajadores
    static public function VerOtrosTC($columna, $valor){

        $tablaBD = "otrosTrabajadores";
        $resultado = OtrosTM::VerOtrosTM($tablaBD, $columna, $valor);

        return $resultado;
    }

    //borrar otros trabajadores
    public function BorrarOtrosTC(){

        if(isset($_GET["Pid"])){
            $tablaBD = "otrosTrabajadores";
            $id = $_GET["Pid"];

            if($_GET["imgOT"] != ""){
                unlink($_GET["imgOT"]);
            }
            $resultado = OtrosTM::BorrarOtrosTM($tablaBD, $id);

            if($resultado == true){
                echo 
                '<script>
                        window.location = "otrosTrabajadores";
                </script>';
            }  
        }
    }

    // actualizar otros trabajadores
    public function ActualizarOtrosTC(){

        if(isset($_POST["Pid"])){

            $tablaBD = "otrosTrabajadores";
            $datosC = array("id"=>$_POST["Pid"], "apellido"=>$_POST["apellidoE"],"nombre"=>$_POST["nombreE"],"documento"=>
            $_POST["documentoE"], "usuario"=>$_POST["usuarioE"],"clave"=>$_POST["claveE"]);
            $resultado = OtrosTM::ActualizarOtrosTM($tablaBD, $datosC);

            if($resultado == true){
                echo 
                '<script>
                        window.location = "otrosTrabajadores";
                </script>';
            }  
        }
    }

        //ver logistica 
    static public function VerOtroTC($columna, $valor){

        $tablaBD = "otrosTrabajadores";
        $resultado = OtrosTM::VerOtroTM($tablaBD, $columna, $valor);

        return $resultado;
    }
}

?>