<?php

class ColaboradorC{

    //imngreso colaborador
    public function IngresoColaboradorC(){

        if(isset($_POST["usuario-Ing"])){

            if(preg_match('/^[a-zA-Z0-9]+$/' , $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/' , $_POST["clave-Ing"])){

                $tablaBD = "otrosTrabajadores";
                $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);
                $resultado = ColaboradorM::IngresarColaboradorM($tablaBD, $datosC);

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

                    echo '<div class="alert alert-danger">Error al Ingresar al sistema</div>';

                }
            }
        }
    }

       //ver perfil colaborador
    public function VerPefilColaboradorC(){

        $tablaBD = "otrosTrabajadores";

        $id = $_SESSION["id"];
        $resultado = ColaboradorM::VerPerfilColaboradorM($tablaBD, $id);

        echo 
        '<tr>
        <td>'.$resultado["usuario"].'</td>
        <td>'.$resultado["clave"].'</td>
        <td>'.$resultado["nombre"].'</td>
        <td>'.$resultado["apellido"].'</td>
        <td>'.$resultado["documento"].'</td>';

        if($resultado["foto"] != ""){

            echo '<td><img src="http://localhost/ViajesFyA/'.$resultado["foto"].'" class="img-responsive" width="40px"></td>';

        }
        else{

            echo '<td><img src="http://localhost/ViajesFyA/Vistas/img/defecto1.png" class="img-thumbnail" width="40px"></td>';

        }

        $columna = "id";
        $valor = $resultado["id_consulta"];
        $consulta = ConsultasC::VerConsultasC($columna, $valor);

        echo '<td>'.$consulta["nombre"].'</td>';


        echo '<td>
            <a href="http://localhost/ViajesFyA/perfil-oT/'.$resultado["id"].'">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            </a>
        </td>
    </tr>';

    }

    public function EditarPerfilColaboradorC(){

        $tablaBD = "otrosTrabajadores";
        $id = $_SESSION["id"];
        $resultado = ColaboradorM::VerPerfilColaboradorM($tablaBD, $id);

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

        //actualizar perfil colaborador
        public function ActualizarPerfilColaboradorC(){

            if(isset($_POST["Pid"])){
    
                $rutaImg = $_POST["imgActual"];
    
                if(isset($_FILES["imgPerfil"]["tmp_name"]) && !empty($_FILES["imgPerfil"]["tmp_name"])){
    
                    if(!empty($_POST["imgActual"])){
    
                        unlink($_POST["imgActual"]);
    
                    }
    
    
                    if($_FILES["imgPerfil"]["type"] == "image/png"){
    
                        $nombre = mt_rand(100,999);
    
                        $rutaImg = "Vistas/img/Colaboradores/colaborador".$nombre.".png";
    
                        $foto = imagecreatefrompng($_FILES["imgPerfil"]["tmp_name"]);
    
                        imagepng($foto, $rutaImg);
    
                    }
    
                    if($_FILES["imgPerfil"]["type"] == "image/jpeg"){
    
                        $nombre = mt_rand(100,999);
    
                        $rutaImg = "Vistas/img/Colaboradores/colaborador".$nombre.".jpg";
    
                        $foto = imagecreatefromjpeg($_FILES["imgPerfil"]["tmp_name"]);
    
                        imagejpeg($foto, $rutaImg);
    
                    }
    
                }
    
                $tablaBD = "otrosTrabajadores";
                $datosC = array("id" => $_POST["Pid"], "nombre" => $_POST["nombrePerfil"], "apellido" => $_POST["apellidoPerfil"], 
                "usuario" => $_POST["usuarioPerfil"], "clave" => $_POST["clavePerfil"], "documento" => $_POST["documentoPerfil"], 
                "foto" => $rutaImg);
                $resultado = ColaboradorM::ActualizarPerfilColaboradorM($tablaBD, $datosC);
    
                if($resultado == true){
    
                    echo '<script>
                    window.location = "http://localhost/ViajesFyA/perfil-oT/'.$_SESSION["id"].'";
                    </script>';
                }
            }
        }
        

}



?>