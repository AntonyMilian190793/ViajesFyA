<?php

    class OtrosTC{

            //imngreso colaborador
    public function IngresotOrosTC(){

        if(isset($_POST["usuario-Ing"])){

            if(preg_match('/^[a-zA-Z0-9]+$/' , $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/' , $_POST["clave-Ing"])){

                $tablaBD = "otrosTrabajadores";
                $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);
                $resultado = OtrosTM::IngresarOtrosTM($tablaBD, $datosC);

                if(is_array($resultado) && $resultado["usuario"] == $_POST["usuario-Ing"] && $resultado["clave"] == $_POST["clave-Ing"]){

                    $_SESSION["Ingresar"] = true; 

                    $_SESSION["id"] = $resultado["id"];
                    $_SESSION["usuario"] = $resultado["usuario"];
                    $_SESSION["nombre"] = $resultado["nombre"];
                    $_SESSION["apellido"] = $resultado["apellido"];
                    $_SESSION["sexo"] = $resultado["sexo"];
                    $_SESSION["documento"] = $resultado["documento"];
                    $_SESSION["foto"] = $resultado["foto"];
                    $_SESSION["rol"] = $resultado["rol"];

					echo '<script>

					window.location = "inicio";
					</script>';
                }else{

                    echo '<div class="alert alert-warning">Error al Ingresar al sistema</div>';

                }
            }
        }
    }

        //crear Otros trabajadores
        public function CrearOtrosTC(){

            if(isset($_POST["rolOT"])){

                $tablaBD = "otrosTrabajadores";
                $datosC = array("id_consulta"=>$_POST["consulta"] ,"apellido"=>$_POST["apellido"],"nombre"=>$_POST["nombre"],"documento"=>$_POST["documento"],
                "usuario"=>$_POST["usuario"],"clave"=>$_POST["clave"], "sexo"=>$_POST["sexo"],"rol"=>$_POST["rolOT"]);

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

    static public function OtroTC($columna, $valor){
        $tablaBD = "otrosTrabajadores";
        $resultado = OtrosTM::OtroTM($tablaBD, $columna, $valor);

        return $resultado;
    }
}

?>