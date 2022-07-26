<?php

    class SistemasC{

        //ingreso  sistemas
        public function IngresarSistemasC(){

            if(isset($_POST["usuario-Ing"])){
                
                if(preg_match("/^[a-zA-Z0-9]+$/", $_POST["usuario-Ing"]) && preg_match("/^[a-zA-Z0-9]+$/", $_POST["clave-Ing"])){
                    
                    $tablaBD = "sistemas";
                    $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);
                    $resultado = SistemasM::IngresarSistemasM($tablaBD, $datosC);

                    if($resultado["usuario"] == $_POST["usuario-Ing"] && $resultado["clave"] == $_POST["clave-Ing"]){
                        
                        $_SESSION["Ingresar"] = true;

                        $_SESSION["id"] = $resultado["id"];
                        $_SESSION["usuario"] = $resultado["usuario"];
                        $_SESSION["nombre"] = $resultado["nombre"];
                        $_SESSION["apellido"] = $resultado["apellido"];
                        $_SESSION["foto"] = $resultado["foto"];
                        $_SESSION["rol"] = $resultado["rol"];

                        echo '<script>
                            window.location= "inicio";
                        </script>';

                    }else{

                    echo '<div class="alert alert-danger">Error al Ingresar al sistema</div>';

                    }
                }
            }
        }
    }
?>