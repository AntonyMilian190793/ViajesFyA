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

        //ver perfil sistemas
        public function VerPerfilSistemasC(){

            $tablaBD = "sistemas";
            $id = $_SESSION["id"];
            $resultado = SistemasM::VerPefilSistemasM($tablaBD, $id);

            echo '
                <tr>
                    <td>'.$resultado["usuario"].'</td>
                    <td>'.$resultado["clave"].'</td>
                    <td>'.$resultado["nombre"].'</td>
                    <td>'.$resultado["apellido"].'</td>';

                    if($resultado["foto"] != ""){

                        echo '<td><img src="'.$resultado["foto"].'" class="img-responsive" width="40px"></td>';
                    }else{
                        echo '<td><img src="http://localhost/ViajesFyA/Vistas/img/defecto1.png" class="img-responsive" width="40px"></td>';
                    }
                    
                    echo '<td>
                        <a href="http://localhost/ViajesFyA/perfil-S/'.$resultado["id"].'">
                            <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                        </a>
                    </td>
                </tr>';
        }

        //editar perfil sistemas
        public function EditarPerfilSistemasC(){

        $tablaBD = "sistemas";

        $id = $_SESSION["id"];
        $resultado = SistemasM::VerPefilSistemasM($tablaBD, $id);

        echo 
        '<form method="post" enctype="multipart/form-data">

        <div class="row">

            <div class="col-md-6 col-xs-12">

                <h2>Nombre:</h2>
                <input type="text" class="input-lg" name="nombreP" value="'.$resultado['nombre'].'">
                <input type="hidden" class="input-lg" name="Sid" value="'.$resultado['id'].'">

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

    }
?>