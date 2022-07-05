<?php

    class PadresC{
        
        //crear Padres
        public function CrearPadreC(){

            if(isset($_POST["rolP"])){
                $tablaBD = "padres";
                $datosC = array("rol"=>$_POST["rolP"], "apellido"=>$_POST["apellido"], "nombre"=>$_POST["nombre"], 
                "sexo"=>$_POST["sexo"], "id_consulta"=>$_POST["consulta"], "usuario"=>$_POST["usuario"], "clave"=>$_POST["clave"]);

                $resultado = PadresM::CrearPadresM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>
                        window.location = "padres";
                    </script>';
                }
            }

        }

        //mostar Padres
        static public function VerPadresC($columna, $valor){
            $tablaBD = "padres";
            $resultado = PadresM::VerPadresM($tablaBD, $columna, $valor);

            return $resultado;
        }

        //editar Padres
        static public function PadreC($columna, $valor){
            $tablaBD = "padres";
            $resultado = PadresM::PadreM($tablaBD, $columna, $valor);

            return $resultado;
        }

        //actualizar Padres
        public function ActualizarPadreC(){

            if(isset($_POST["Pid"])){

                $tablaBD = "padres";
                $datosC = array("id"=>$_POST["Pid"], "apellido"=>$_POST["apellidoE"], "nombre"=>$_POST["nombreE"], "sexo"=>$_POST["sexoE"],
                "usuario"=>$_POST["usuarioE"], "clave"=>$_POST["claveE"]);

                $resultado = PadresM::ActualizarPadresM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>
                        window.location = "padres";
                    </script>';
                }
            }
        }

        //eliminar Padres
        public function BorrarPadreC(){

            if(isset($_GET["Pid"])){

                $tablaBD = "padres";
                $id = $_GET["Pid"];

                if($_GET["imgD"] != ""){
                    unlink($_GET["imgD"]);
                }

                $resultado = PadresM::BorrarPadresM($tablaBD, $id);

                if($resultado == true){
                    echo '<script>
                        window.location = "padres";
                    </script>';
                }
            }
        }
    }

?>    