<?php

    class InicioC{


        public function MostrarInicioC(){
                
            $tablaBD = "inicio";
            $id = "1";
            $resultado = InicioM::MostrarInicioM($tablaBD, $id);

            echo '
            <div class="box-body">
    
            <div class="col-md-6 bg-danger" style="margin-Top: 5%">';


            if($_SESSION["rol"] == "otrosTrabajadores"){

                echo'<h1><strong>Bienvenid@ '.$_SESSION["nombre"].'</strong></h1>';

            }else if($_SESSION["rol"] == "Logistica"){

                echo'<h1><strong>Bienvenid@ '.$_SESSION["nombre"].' '.$_SESSION["apellido"].'</strong></h1>';

            }else if($_SESSION["rol"] == "Directivo"){

                echo'<h1><strong>Bienvenid@ '.$_SESSION["nombre"].' '.$_SESSION["apellido"].'</strong></h1>';

            }else if($_SESSION["rol"] == "Sistemas"){

                echo'<h1><strong>Bienvenid@ '.$_SESSION["nombre"].' '.$_SESSION["apellido"].'</strong></h1>';
            }


    
            echo '<h3 align="justify">'.$resultado["intro"].'</h3>

    
            <hr>
    
            <h2>Dirección:</h2>
            <h3>'.$resultado["direccion"].'</h3>
    
            <hr>
    
            <h2>Contacto 1:</h2>

            <h3>Nombres: '.$resultado["nombre"].' <br>
            Teléfono: '.$resultado["telefono"].' <br>
            Correo: '.$resultado["correo"].'
            </h3>

            <hr>

            <h2>Contacto 2:</h2>
            <h3>Nombres: '.$resultado["nombre1"].' <br>
            Teléfono: '.$resultado["telefono1"].' <br>
            Correo: '.$resultado["correo1"].'
            </h3>
            
            
            </div>
            
    
            <div class="col-md-6">
              <img src="'.$resultado["logo"].'" class="img-responsive">
            </div>
              
            </div>';
    
        }

        //editar inicio
        public function EditarInicioC(){

        $tablaBD = "inicio";
        $id = "1";
        $resultado = InicioM::MostrarInicioM($tablaBD, $id);

        echo '<form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h2>Introducción:</h2>
                <input type="text" class="input-lg" name="intro" value="'.$resultado["intro"].'">
                <input type="hidden" class="input-lg" name="Iid" value="'.$resultado["id"].'">



                <h2>Dirección:</h2>
                <input type="text" class="input-lg" name="direccion" value="'.$resultado["direccion"].'">

                <h1><strong>Trabajador 1</strong></h1>

                <h2>Nombres:</h2>
                <input type="text" class="input-lg" name="nombre" value="'.$resultado["nombre"].'">

                <h2>Teléfono:</h2>
                <input type="text" class="input-lg" name="telefono" value="'.$resultado["telefono"].'">

                <h2>Correo:</h2>
                <input type="text" class="input-lg" name="correo" value="'.$resultado["correo"].'">

                <h1><strong>Trabajador 2</strong></h1>

                <h2>Nombres:</h2>
                <input type="text" class="input-lg" name="nombre1" value="'.$resultado["nombre1"].'">


                <h2>Teléfono 1:</h2>
                <input type="text" class="input-lg" name="telefono1" value="'.$resultado["telefono1"].'">

                <h2>Correo 1:</h2>
                <input type="text" class="input-lg" name="correo1" value="'.$resultado["correo1"].'">
            </div>

            <div class="col-md-6 col-xs-12">

            <br><br>

            <h2>Logo:</h2>
            <input type="file" name="logo">
            <br>

            <img src="http://localhost/ViajesFyA/'.$resultado["logo"].'" width="200px" class="img-responsive">
            <input type="hidden" name="logoActual" value="'.$resultado["logo"].'">

            <br><br>

            <h2>Favivon:</h2>
            <input type="file" name="favicon">
            <br>

            <img src="http://localhost/ViajesFyA/'.$resultado["favicon"].'" width="200px" class="img-responsive">
            <input type="hidden" name="faviconActual" value="'.$resultado["favicon"].'">

            <br><br>

            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
        </div>
    </form>';
    }

    //editar inicio
	public function ActualizarInicioC(){

		if(isset($_POST["Iid"])){

			$rutaLogo = $_POST["logoActual"];

			if(isset($_FILES["logo"]["tmp_name"]) && !empty($_FILES["logo"]["tmp_name"])){

				if(!empty($_POST["logoActual"])){

					unlink($_POST["logoActual"]);

				}

				if($_FILES["logo"]["type"] == "image/jpeg"){

					$rutaLogo = "Vistas/img/logo.jpeg";

					$logo = imagecreatefromjpeg($_FILES["logo"]["tmp_name"]);
					
					imagejpeg($logo, $rutaLogo);

				}

				if($_FILES["logo"]["type"] == "image/png"){

					$rutaLogo = "Vistas/img/logo.png";

					$logo = imagecreatefrompng($_FILES["logo"]["tmp_name"]);
					
					imagepng($logo, $rutaLogo);

				}

			}



			$rutaFavicon = $_POST["faviconActual"];

			if(isset($_FILES["favicon"]["tmp_name"]) && !empty($_FILES["favicon"]["tmp_name"])){

				if(!empty($_POST["faviconActual"])){

					unlink($_POST["faviconActual"]);

				}

				if($_FILES["favicon"]["type"] == "image/jpeg"){

					$rutaFavicon = "Vistas/img/favicon.jpeg";

					$favicon = imagecreatefromjpeg($_FILES["favicon"]["tmp_name"]);
					
					imagejpeg($favicon, $rutaFavicon);

				}

				if($_FILES["favicon"]["type"] == "image/png"){

					$rutaFavicon = "Vistas/img/favicon.png";

					$favicon = imagecreatefrompng($_FILES["favicon"]["tmp_name"]);
					
					imagepng($favicon, $rutaFavicon);

				}

			}


			$tablaBD = "inicio";

			$datosC = array("id"=>$_POST["Iid"], "intro"=>$_POST["intro"],
            "telefono"=>$_POST["telefono"], "correo"=>$_POST["correo"], "nombre"=>$_POST["nombre"], "nombre1"=>$_POST["nombre1"],  "telefono1"=>$_POST["telefono1"], "correo1"=>$_POST["correo1"], 
            "direccion"=>$_POST["direccion"], "logo"=>$rutaLogo, "favicon"=>$rutaFavicon);

			$resultado = InicioM::ActualizarInicioM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "inicio-editar";
				</script>';

			}


		}

	}

    //
    public function FaviconC(){

        $tablaBD = "inicio";
        $id = "1";
        $resultado = InicioM::MostrarInicioM($tablaBD, $id);

        echo '<link rel="icon" href="'.$resultado["favicon"].'">';
    }
}

?>