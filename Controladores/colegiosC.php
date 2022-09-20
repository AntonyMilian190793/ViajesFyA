<?php

    class ColegiosC{
        //crear consultas

        public function CrearColegiosC(){

            if(isset($_POST["consultasN"])){

                $tablaBD = "colegios";
                $consulta = array("nombre" => $_POST["consultasN"]);
                $resultado = ColegiosM::CrearColegiosM($tablaBD, $consulta);

                if($resultado == true){
                    echo '<script>

                    window.location = "http://localhost/ViajesFyA/colegios";
                    </script>';

                }
            }
        }

        //ver consultas

        static public function VerColegiosC($columna, $valor){
            
            $tablaBD = "colegios";
            $resultado = ColegiosM::VerColegiosM($tablaBD, $columna, $valor);

            return $resultado;
        }

        //borrar consultas
        public function BorrarColegiosC(){

            if(substr($_GET["url"], 9)){

                $tablaBD = "colegios";
                $id = substr($_GET["url"], 9);
                $resultado = ColegiosM::BorrarColegiosM($tablaBD, $id);

                if($resultado == true){
                    echo '<script>

                    window.location = "http://localhost/ViajesFyA/colegios";
                    </script>';

                }

            }
        }

        //editar consultas

        public function EditarColegiosC(){

            $tablaBD = "colegios";
            $id = substr($_GET["url"], 5);
            $resultado = ColegiosM::EditarColegiosM($tablaBD, $id);

            echo '<div class="form-group">
                    <h2>Nombre:</h2>
                    <input type="text" class="form-control input-lg" name="consultaE" value="'.$resultado['nombre'].'">
                    <input type="hidden" class="form-control input-lg" name="Cid" value="'.$resultado['id'].'">

                    <br>

                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                </div>';
        }

        //actualizar consultas

        public function ActualizarColegiosC(){

            if(isset($_POST["consultaE"])){

                $tablaBD = "colegios";
                $datosC = array("id" => $_POST["Cid"], "nombre" => $_POST["consultaE"]);
                $resultado = ColegiosM::ActualizarColegiosM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>

                    window.location = "http://localhost/ViajesFyA/colegios";
                    </script>';

                }
            }
        }
    }


?>