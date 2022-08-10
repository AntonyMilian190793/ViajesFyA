<?php

    class PadresC{
        
        //crear Padres
        public function CrearPadreC(){

            if(isset($_POST["rolP"])){
                $tablaBD = "directivos";
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
            $tablaBD = "directivos";
            $resultado = PadresM::VerPadresM($tablaBD, $columna, $valor);

            return $resultado;
        }


        //editar Padres
        static public function PadreC($columna, $valor){
            $tablaBD = "directivos";
            $resultado = PadresM::PadreM($tablaBD, $columna, $valor);

            return $resultado;
        }

        //actualizar Padres
        public function ActualizarPadreC(){

            if(isset($_POST["Pid"])){

                $tablaBD = "directivos";
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

                $tablaBD = "directivos";
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

        //ingreso de Padres
        public function IngresarPadreC(){

            if(isset($_POST["usuario-Ing"])){

            if(preg_match('/^[a-zA-Z0-9]+$/' , $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/' , $_POST["clave-Ing"])){

                $tablaBD = "directivos";
                $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);
                $resultado = PadresM::IngresarPadreM($tablaBD, $datosC);

                if($resultado["usuario"] == $_POST["usuario-Ing"] && $resultado["clave"] == $_POST["clave-Ing"]){

                    $_SESSION["Ingresar"] = true; 

                    $_SESSION["id"] = $resultado["id"];
                    $_SESSION["usuario"] = $resultado["usuario"];
                    $_SESSION["nombre"] = $resultado["nombre"];
                    $_SESSION["apellido"] = $resultado["apellido"];
                    $_SESSION["sexo"] = $resultado["sexo"];
                    $_SESSION["foto"] = $resultado["foto"];
                    $_SESSION["rol"] = $resultado["rol"];

					echo '<script>

					window.location = "inicio";
					</script>';
                }else{

                    echo '<div class="alert alert-danger">Error al Ingresar al sistema</div>';

                }
            }
        }
    }

    //ver perfil padres
    public function VerPerfilPadre(){

        $tablaBD = "directivos";
        $id = $_SESSION["id"];
        $resultado = PadresM::VerPerfilPadreM($tablaBD, $id);

        echo '<tr>
        <td>'.$resultado["usuario"].'</td>
        <td>'.$resultado["clave"].'</td>
        <td>'.$resultado["nombre"].'</td>
        <td>'.$resultado["apellido"].'</td>';


        if($resultado["foto"] == ""){

            echo '<td><img src="Vistas/img/defecto1.png"  width="40px"></td>';
        }else{

            echo '<td><img src="'.$resultado["foto"].'" class="img-thumbnail" width="40px"></td>';
        }

        $columna = "id";
        $valor = $resultado["id_consulta"];
        $consulta = ConsultasC::VerConsultasC($columna, $valor);

        echo '<td>'.$consulta["nombre"].'</td>';

        

        echo '<td>

            Desde: '.$resultado["horarioE"].'
            <br>
            Hasta: '.$resultado["horarioS"].'

        </td>
        
        <td>
            <a href="http://localhost/ViajesFyA/perfil-P/'.$resultado["id"].'">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            </a>
        </td>
    </tr>';
    }

    //editar perfil Padre
    public function EditarPerfilPadreC(){

        $tablaBD = "directivos";
        $id = $_SESSION["id"];
        $resultado = PadresM::VerPerfilPadreM($tablaBD, $id);

        echo '            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h2>Nombre:</h2>
                        <input type="text" class="input-lg" name="nombrePerfil" value="'.$resultado["nombre"].'">
                        <input type="hidden" name="Did" value="'.$resultado["id"].'">

                        <h2>Apellido:</h2>
                        <input type="text" class="input-lg" name="apellidoPerfil" value="'.$resultado["apellido"].'">

                        <h2>Usuario:</h2>
                        <input type="text" class="input-lg" name="usuarioPerfil" value="'.$resultado["usuario"].'">

                        <h2>Clave:</h2>
                        <input type="text" class="input-lg" name="clavePerfil" value="'.$resultado["clave"].'">';

                        $columna = "id";
                        $valor = $resultado["id_consulta"];
                        $consulta = ConsultasC::VerConsultasC($columna, $valor);

                        echo '

                        <h2>Área de trabajo actual: '.$consulta["nombre"].'</h2>
                        <h3>Cambiar Área</h3>
                        <select class="input-lg" name="consultaPerfil">';

                        
                        $columna = null;
                        $valor = null;
                        $consulta = ConsultasC::VerConsultasC($columna, $valor);


                        foreach ($consulta as $key => $value){
                            echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                        }

                        echo '</select>

                        <div class="form-group">
                            <h2>Horario:</h2>
                            Desde: <input type="time" class="input-lg" name="hePerfil" value="'.$resultado["horarioE"].'">
                            Hasta: <input type="time" class="input-lg" name="hsPerfil" value="'.$resultado["horarioS"].'">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <br><br>
                        <input type="file" name="imgPerfil">
                        <br>';

                        if($resultado["foto"] == ""){

                            echo '<img src="http://localhost/ViajesFyA/Vistas/img/defecto1.png"  class="img-responsive" width="200px">';

                        }else{
                            echo '<img src="http://localhost/ViajesFyA/'.$resultado["foto"].'"  class="img-responsive" width="200px">';
                        }
                        
                        echo '<input type="hidden" name="imgActual" value="'.$resultado["foto"].'">
                        <br><br>
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                    </div>
                </div>
            </form>';
    }

    //actualizar perfil Padre
    public function ActualizarPerfilPadreC(){

        if(isset($_POST["Did"])){

            $rutaImg = $_POST["imgActual"];

            if(isset($_FILES["imgPerfil"]["tmp_name"]) && !empty($_FILES["imgPerfil"]["tmp_name"])){

                if(!empty($_POST["imgActual"])){
                    unlink($_POST["imgActual"]);
                }

                if($_FILES["imgPerfil"]["type"] == "image/png"){

                    $nombre = mt_rand(100,999);
                    $rutaImg = "Vistas/img/Padres/Pad-".$nombre.".png";
                    $foto = imagecreatefrompng($_FILES["imgPerfil"]["tmp_name"]);
                    imagepng($foto, $rutaImg);
                }
                
                if($_FILES["imgPerfil"]["type"] == "image/jpeg"){

                    $nombre = mt_rand(100,999);
                    $rutaImg = "Vistas/img/Padres/Pad-".$nombre.".jpg";
                    $foto = imagecreatefromjpeg($_FILES["imgPerfil"]["tmp_name"]);
                    imagejpeg($foto, $rutaImg);
                }
            }

            $tablaBD = "directivos";
            $datosC = array(
                "id" => $_POST['Did'],
                "nombre" => $_POST['nombrePerfil'],
                "apellido" => $_POST['apellidoPerfil'],
                "usuario" => $_POST['usuarioPerfil'],
                "clave" => $_POST['clavePerfil'],
                "foto" => $rutaImg,
                "id_consulta" => $_POST['consultaPerfil'],
                "horarioE" => $_POST['hePerfil'],
                "horarioS" => $_POST['hsPerfil']
            );

            $resultado = PadresM::ActualizarPerfilPadreM($tablaBD, $datosC);

            if($resultado == true){

                echo '<script>
                
                    window.location = "http://localhost/ViajesFyA/perfil-P/'.$_SESSION["id"].'";
                
                </script>';
            }
        }
    }
}

?>    