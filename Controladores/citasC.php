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

        //ver citas
        public static function VerCitasC(){

            $tablaBD = "vueloslogistica";
            $resultado = CitasM::VerCitasM($tablaBD);
            return $resultado;
        }

        //ver citas completo
        public function VerCitasCompletoC(){

            $tablaBD = "vueloslogistica";
            $resultado = CitasM::VerCitasCompletoM($tablaBD);
            return $resultado;
        }

        //ver citas detallado
        public function VerCitasDetalladoC(){

            $tablaBD = "vueloslogistica";
            $resultado = CitasM::VerCitasDetalladoM($tablaBD);
            return $resultado;
        }


        //pedir cita como Padre
        public static function PedirCitaPadreC(){

            if(isset($_POST["Did"])){

                $tablaBD = "vuelos";
                $Did = substr($_GET["url"], 7);
                $datosC = array("Did"=>$_POST["Did"], "Cid"=>$_POST["Cid"], "nombreP"=>$_POST["nombreP"], "documentoP"=>$_POST["documentoP"],
                "fyhIC"=>$_POST["fyhIC"], "fyhFC"=>$_POST["fyhFC"]);
                $resultado = CitasM::PedirCitaPadreM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>
                    window.location = "Vuelos/"'.$Did.';
                    </script>';
                }
            }
        }

        //pedir cita logistica
        public function PedirCitaLogisticaC(){
            
            if(isset($_POST["Did"])){

                $tablaBD = "vueloslogistica";
                $Did = substr($_GET["url"], 6);
                $datosC = array("Did"=>$_POST["Did"], "Cid"=>$_POST["Cid"], "nombreP"=>$_POST["nombreP"], "documentoP"=>$_POST["documentoP"],
                "inicio"=>$_POST["inicio"], "fin"=>$_POST["fin"],"nombreCo"=>$_POST["nombreCo"], "comentario"=>$_POST["comentario"], "color"=>$_POST["color"]);


                $resultado = CitasM::PedirCitaLogisticaM($tablaBD, $datosC);

                
                if($resultado == true){
                    echo '<script>
                    window.location = "Padre/"'.$Did.';
                    </script>';
                }

            }
        }

        //pedir cita Colaboradores
        public function PedirCitaColaboradoresC(){
            
            if(isset($_POST["Did"])){

                $tablaBD = "vueloslogistica";
                $Did = substr($_GET["url"], 8);
                $datosC = array("Did"=>$_POST["Did"], "Cid"=>$_POST["Cid"], "nombreP"=>$_POST["nombreP"], "documentoP"=>$_POST["documentoP"],
                "fyhIC"=>$_POST["fyhIC"], "fyhFC"=>$_POST["fyhFC"],"nombreCo"=>$_POST["nombreCo"], "comentario"=>$_POST["comentario"], "color"=>$_POST["color"]);


                $resultado = CitasM::PedirCitaColaboradoresM($tablaBD, $datosC);

                
                if($resultado == true){
                    echo '<script>
                    window.location = "VuelosC/"'.$Did.';
                    </script>';
                }

            }
        }

        //public function ModificarCita(){
          //  $tablaBD = "vueloslogistica";
           // $resultado = CitasM::ModificarCita($tablaBD);
        //}


        public static function VerVuelosLogisticaC(){
            $tablaBD = "vueloslogistica";
            $resultado = CitasM::VerVuelosLogisticaM($tablaBD);
            return $resultado;
        }

        //eliminar vueloslogistica
        public function BorrarCitasC(){

            if(isset($_GET["Pid"])){

                $tablaBD = "vueloslogistica";
                $id = $_GET["Pid"];

                $resultado = CitasM::BorrarCitasM($tablaBD, $id);

                if($resultado == true){
                    echo '<script>
                        window.location = "VuelosTabla";
                    </script>';
                }
            }
        }

        public function CitaC($columna, $valor){
            $tablaBD = "vueloslogistica";
            $resultado = CitasM::CitaM($tablaBD, $columna, $valor);

            return $resultado;
        }

        //actualizar citas
        public function ActualizarCitasC(){

            if(isset($_POST["Pid"])){
                $tablaBD = "vueloslogistica";
                $datosC = array("id" => $_POST["Pid"], "inicio" => $_POST["inicioE"], "fin" => $_POST["finE"], "colegio" => $_POST["nombreCo"], "comentario" => $_POST["comentarioE"]);

                $resultado = CitasM::ActualizarCitasM($tablaBD, $datosC);

                if($resultado == true){
                    echo '<script>
                        window.location = "VuelosTabla";
                    </script>';
                }
            }
        }


    }




?>