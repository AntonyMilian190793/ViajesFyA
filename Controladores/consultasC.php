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

        //borrar consultas
        public function BorrarConsulasC(){

            if(substr($_GET["url"], 10)){

                $tablaBD = "consultas";
                $id = substr($_GET["url"], 10);
                $resultado = ConsultasM::BorrarConsultasM($tablaBD, $id);

                if($resultado == true){
                    echo '<script>

                    window.location = "http://localhost/ViajesFyA/consultas";
                    </script>';

                }

            }
        }

        //editar consultas

        public function EditarConsultasC(){

            $tablaBD = "consultas";
            $id = substr($_GET["url"], 4);
            $resultado = ConsultasM::EditarConsultasM($tablaBD, $id);

            echo '<div class="form-group">
                    <h2>Nombre:</h2>
                    <input type="text" class="form-control input-lg" name="consultaE" value="'.$resultado['nombre'].'" required>
                    <input type="hidden" class="form-control input-lg" name="Cid" value="'.$resultado['id'].'">

                    <br>

                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                </div>';
        }

        //actualizar consultas

        public function ActualizarConsultaC(){

            if(isset($_POST["consultaE"])){

                $tablaBD = "consultas";
                $datosC = array("id" => $_POST["Cid"], "nombre" => $_POST["consultaE"]);
                $resultado = ConsultasM::ActualizarConsultasM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>

                    window.location = "http://localhost/ViajesFyA/consultas";
                    </script>';

                }
            }
        }
    }


?>