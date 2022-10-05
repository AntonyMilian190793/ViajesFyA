<?php

class AdministracionC{


    //ingreso administracion
    public function IngresarAdministracionC(){

        if(isset($_POST["usuario-Ing"])){

            if(preg_match('/^[a-zA-Z0-9]+$/' , $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/' , $_POST["clave-Ing"])){

                $tablaBD = "jefesarea";
                $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);
                $resultado = AdministracionM::IngresarAdministracionM($tablaBD, $datosC);

                if(is_array($resultado) && $resultado["usuario"] == $_POST["usuario-Ing"] && $resultado["clave"] == $_POST["clave-Ing"]){

                    $_SESSION["Ingresar"] = true; 

                    $_SESSION["id"] = $resultado["id"];
                    $_SESSION["usuario"] = $resultado["usuario"];
                    $_SESSION["nombre"] = $resultado["nombre"];
                    $_SESSION["apellido"] = $resultado["apellido"];
                    $_SESSION["documento"] = $resultado["documento"];
                    $_SESSION["foto"] = $resultado["foto"];
                    $_SESSION["rol"] = $resultado["rol"];

					echo '<script>

					window.location = "inicio";
					</script>';
                }else{

                    echo '<div class="alert alert-danger">Usuario y/o Contraseña incorrecta.</div>';

                }
            }
        }
    }

    //ver perfil administracion
    public function VerPefilAdministracionC(){

        $tablaBD = "jefesarea";
        $id = $_SESSION["id"];
        $resultado = AdministracionM::VerPefilAdministracionM($tablaBD, $id);

        echo '            
        <tr>
        <td>'.$resultado["usuario"].'</td>
        <td>'.$resultado["clave"].'</td>
        <td>'.$resultado["nombre"].'</td>
        <td>'.$resultado["apellido"].'</td>';


        if($resultado["foto"] == ""){

            echo '<td><img src="Vistas/img/defecto1.png"  width="40px"></td>';
        }else{

            echo '<td><img src="'.$resultado["foto"].'" class="img-thumbnail" width="40px"></td>';
        }

        echo '<td>'.$resultado["documento"].'</td>
        
        <td>
            <a href="http://localhost/ViajesFyA/perfil-JA/'.$resultado["id"].'">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            </a>
        </td>
    </tr>';
    }

    //editar perfil administracion
    public function EditarPerfilAdministracionC(){

        $tablaBD = "jefesarea";
        $id = $_SESSION["id"];
        $resultado = AdministracionM::VerPefilAdministracionM($tablaBD, $id);

        echo '<form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h2>Nombre:</h2>
                <input type="text" class="input-lg" name="nombrePerfil" value="'.$resultado["nombre"].'">
                <input type="hidden" class="input-lg" name="Pid" value="'.$resultado["id"].'">

                <h2>Apellido:</h2>
                <input type="text" class="input-lg" name="apellidoPerfil" value="'.$resultado["apellido"].'">

                <h2>Usuario:</h2>
                <input type="text" class="input-lg" name="usuarioPerfil" value="'.$resultado["usuario"].'">

                <h2>Clave:</h2>
                <input type="text" class="input-lg" name="clavePerfil" value="'.$resultado["clave"].'">

                <h2>Documento:</h2>
                <input type="text" class="input-lg" name="documentoPerfil" value="'.$resultado["documento"].'">
            </div>

            <div class="col-md-6 col-xs-12">

            <br><br>

            <input type="file" name="imgPerfil">
            <br>';

            
            if($resultado["foto"] != ""){

                echo '<img src="http://localhost/ViajesFyA/'.$resultado["foto"].'" width="200px" class="img-responsive">';

            }else{
                    
                    echo '<img src="http://localhost/ViajesFyA/Vistas/img/defecto1.png" width="200px" class="img-responsive">';
            }

            
            
            echo '<input type="hidden" name="imgActual" value="'.$resultado["foto"].'">

            <br><br>

            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
        </div>
    </form>';
    }

    //actualizar perfil administracion
    public function ActualizarPerfilAdministracionC(){

        if(isset($_POST["Pid"])){

            $rutaImg = $_POST["imgActual"];

			if(isset($_FILES["imgPerfil"]["tmp_name"]) && !empty($_FILES["imgPerfil"]["tmp_name"])){

				if(!empty($_POST["imgActual"])){

					unlink($_POST["imgActual"]);

				}


				if($_FILES["imgPerfil"]["type"] == "image/png"){

					$nombre = mt_rand(100,999);

					$rutaImg = "Vistas/img/Administracion/administracion".$nombre.".png";

					$foto = imagecreatefrompng($_FILES["imgPerfil"]["tmp_name"]);

					imagepng($foto, $rutaImg);

				}

				if($_FILES["imgPerfil"]["type"] == "image/jpeg"){

					$nombre = mt_rand(100,999);

					$rutaImg = "Vistas/img/Administracion/administracion".$nombre.".jpg";

					$foto = imagecreatefromjpeg($_FILES["imgPerfil"]["tmp_name"]);

					imagejpeg($foto, $rutaImg);

				}

			}

            $tablaBD = "jefesarea";
            $datosC = array("id" => $_POST["Pid"], "nombre" => $_POST["nombrePerfil"], "apellido" => $_POST["apellidoPerfil"], 
            "usuario" => $_POST["usuarioPerfil"], "clave" => $_POST["clavePerfil"], "documento" => $_POST["documentoPerfil"], 
            "foto" => $rutaImg);
            $resultado = AdministracionM::ActualizarPerfilAdministracionM($tablaBD, $datosC);

            if($resultado == true){

                echo '<script>
                window.location = "http://localhost/ViajesFyA/perfil-JA/'.$_SESSION["id"].'";
                </script>';
            }
        }
    }

    //ver administracion 
    static public function VerAdministracionC($columna, $valor){

        $tablaBD = "jefesarea";
        $resultado = AdministracionM::VerAdministracionM($tablaBD, $columna, $valor);

        return $resultado;
    }

    //ver trabajadores administracion
    public function VerAdministracionTC(){

        $tablaBD = "jefesarea";
        $resultado = AdministracionM::VerAdministracionTM($tablaBD);

        return $resultado;
    }

        //crear trabajadores Administracion
        public function CrearAdministracionC(){

            if(isset($_POST["rolA"])){

                $tablaBD = "jefesarea";
                $datosC = array("apellido"=>$_POST["apellido"],"nombre"=>$_POST["nombre"],"documento"=>$_POST["documento"],
                "usuario"=>$_POST["usuario"], "sexo"=>$_POST["sexo"],"clave"=>$_POST["clave"], "id_consulta"=>$_POST["consulta"], 
                "rol"=>$_POST["rolA"]);

                $resultado = AdministracionM::CrearAdministracionM($tablaBD, $datosC);

                if($resultado == true){
                    echo 
                    '<script>
                            window.location = "administracion";
                    </script>';
            }   
        }
    }

    //borrar trabajadores administracion
        public function BorrarAdministracionC(){

        if(isset($_GET["Aid"])){
            $tablaBD = "jefesarea";
            $id = $_GET["Aid"];

            if($_GET["imgA"] != ""){
                unlink($_GET["imgA"]);
            }
            $resultado = AdministracionM::BorrarAdministracionM($tablaBD, $id);

            if($resultado == true){
                echo 
                '<script>
                        window.location = "administracion";
                </script>';
            }  
        }
    }

    
        //calendario jefea area
        static public function AdministracionnC($columna, $valor){
            $tablaBD = "jefesarea";
            $resultado = AdministracionM::AdministracionnM($tablaBD, $columna, $valor);

            return $resultado;
        }
}

?>