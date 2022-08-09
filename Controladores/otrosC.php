<?php

class OtrosC{

    //ingreso otros

    public function IngresarOtrosC(){

        if(isset($_POST["usuario-Ing"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave-Ing"])){

                $tablaBD = "logistica";

                $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);

                $resultado = OtrosM::IngresarOtrosM($tablaBD, $datosC);

                if($resultado["usuario"] == $_POST["usuario-Ing"] && $resultado["clave"] == $_POST["clave-Ing"]){

                    $_SESSION["Ingresar"] = true; 
                    
                    $_SESSION["id"] = $resultado["id"];
                    $_SESSION["usuario"] = $resultado["usuario"];
                    $_SESSION["nombre"] = $resultado["nombre"];
                    $_SESSION["apellido"] = $resultado["apellido"];
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


    //ver perfil otros
    public function VerPefilOtrosC(){

        $tablaBD = "logistica";

        $id = $_SESSION["id"];
        $resultado = OtrosM::VerPefilOtrosC($tablaBD, $id);

        echo 
        '<tr>
        <td>'.$resultado["usuario"].'</td>
        <td>'.$resultado["clave"].'</td>
        <td>'.$resultado["nombre"].'</td>
        <td>'.$resultado["apellido"].'</td>';

        if($resultado["foto"] != ""){

            echo '<td><img src="http://localhost/ViajesFyA/'.$resultado["foto"].'" class="img-responsive" width="40px"></td>';

        }
        else{

            echo '<td><img src="http://localhost/ViajesFyA/Vistas/img/defecto1.png" class="img-thumbnail" width="40px"></td>';

        }


        echo '<td>
            <a href="http://localhost/ViajesFyA/perfil-L/'.$resultado["id"].'">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            </a>
        </td>
    </tr>';

    }

    //editar Perfil de Otros

    public function EditarPerfilOtrosC(){

        $tablaBD = "logistica";

        $id = $_SESSION["id"];
        $resultado = OtrosM::VerPefilOtrosC($tablaBD, $id);

        echo 
        '<form method="post" enctype="multipart/form-data">

        <div class="row">

            <div class="col-md-6 col-xs-12">

                <h2>Nombre:</h2>
                <input type="text" class="input-lg" name="nombreP" value="'.$resultado['nombre'].'">
                <input type="hidden" class="input-lg" name="idP" value="'.$resultado['id'].'">

                <h2>Apellido:</h2>
                <input type="text" class="input-lg" name="apellidoP" value="'.$resultado['apellido'].'">

                <h2>Usuario:</h2>
                <input type="text" class="input-lg" name="usuarioP" value="'.$resultado['usuario'].'">

                <h2>Contraseña:</h2>
                <input type="text" class="input-lg" name="claveP" value="'.$resultado['clave'].'">

            </div>

            <div class="col-md-6 col-xs-12">

                <br><br>

                <input type="file" name="imgP">
                <br>';
                
                if($resultado['foto'] == ""){

                    echo '<img src="http://localhost/ViajesFyA/Vistas/img/defecto1.png" width="200px;">';

                }else{

                    echo '<img src="http://localhost/ViajesFyA/'.$resultado["foto"].'" width="200px;">';

                }
                

                

                
                echo '
                <input type="hidden" name="imgActual" value="'.$resultado["foto"].'">

                <br><br>

                <button type="submit" class="btn btn-success">Guardar Cambios</button>



            </div>

        </div>

    </form>';

    }

    //Actualizar Perfil  Otros

    public function ActualizarPerfilOtrosC(){


		if(isset($_POST["idP"])){

			$rutaImg = $_POST["imgActual"];

			if(isset($_FILES["imgP"]["tmp_name"]) && !empty($_FILES["imgP"]["tmp_name"])){

				if(!empty($_POST["imgActual"])){

					unlink($_POST["imgActual"]);

				}


				if($_FILES["imgP"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,99);

					$rutaImg = "Vistas/img/Otros/O-".$nombre.".jpg";

					$foto = imagecreatefromjpeg($_FILES["imgP"]["tmp_name"]);

					imagejpeg($foto, $rutaImg);

				}

				if($_FILES["imgP"]["type"] == "image/png"){

					$nombre = mt_rand(10,99);

					$rutaImg = "Vistas/img/Otros/O-".$nombre.".png";

					$foto = imagecreatefrompng($_FILES["imgP"]["tmp_name"]);

					imagepng($foto, $rutaImg);

				}

			}

        $tablaBD = "logistica";

        $datosC = array("id"=>$_POST["idP"], 
        "nombre"=>$_POST["nombreP"], 
        "apellido"=>$_POST["apellidoP"], 
        "usuario"=>$_POST["usuarioP"], 
        "clave"=>$_POST["claveP"], 
        "foto"=>$rutaImg);

        $resultado = OtrosM::ActualizarPerfilOtroM($tablaBD, $datosC);

        if($resultado == true){

            echo '<script>

            window.location = "http://localhost/ViajesFyA/perfil-L/'.$_SESSION["id"].'";
            
            </script>';

        }

        }
    }

    //mostrar secretaria
    public function VerOtrosC(){

        $tablaBD = "logistica";
        $resultado = OtrosM::VerOtrosM($tablaBD);

        return $resultado;
    }

    
    //crear secretarias
    public function CrearSecretariaC(){

        if(isset($_POST["rolS"])){

            $tablaBD = "logistica";
            $datosC = array(
                "nombre" => $_POST["nombre"],
                "apellido" => $_POST["apellido"],
                "usuario" => $_POST["usuario"],
                "clave" => $_POST["clave"],
                "rol" => $_POST["rolS"]
            );

            $resultado = OtrosM::CrearSecretariaM($tablaBD, $datosC);

            if($resultado == true){

                echo '<script>

                window.location = "secretarias";
                
                </script>';

            }
        }
    }

    //borrar secretarias
    public function BorrarSecretariaC(){

        if($_GET["Sid"]){

            $tablaBD = "logistica";
            $id = $_GET["Sid"];

            if($_GET["imgS"] != ""){

                unlink($_GET["imgS"]);
            }

            $resultado = OtrosM::BorrarSecretariaM($tablaBD, $id);

            
            if($resultado == true){

                echo '<script>

                window.location = "secretarias";
                
                </script>';
            }
        }
    }
}

?>
