<?php

class AdministracionC{


    //ingreso administracion
    public function IngresarAdministracionC(){

        if(isset($_POST["usuario-Ing"])){

            if(preg_match('/^[a-zA-Z0-9]+$/' , $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/' , $_POST["clave-Ing"])){

                $tablaBD = "administracion";
                $datosC = array("usuario"=>$_POST["usuario-Ing"], "clave"=>$_POST["clave-Ing"]);
                $resultado = AdministracionM::IngresarAdministracionM($tablaBD, $datosC);

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

    //ver perfil administracion
    public function VerPefilAdministracionC(){

        $tablaBD = "administracion";
        $id = $_SESSION["id"];
        $resultado = AdministracionM::VerPefilAdministracionM($tablaBD, $id);

        echo '            
        <tr>
        <td>'.$resultado["usuario"].'</td>
        <td>'.$resultado["clave"].'</td>
        <td>'.$resultado["nombre"].'</td>
        <td>'.$resultado["apellido"].'</td>';


        if($resultado["foto"] == ""){

            echo '<td><img src="Vistas/img/defecto.png"  width="40px"></td>';
        }else{

            echo '<td><img src="'.$resultado["foto"].'" class="img-thumbnail" width="40px"></td>';
        }

        echo '<td>'.$resultado["documento"].'</td>
        
        <td>
            <a href="#">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            </a>
        </td>
    </tr>';
    }
}

?>