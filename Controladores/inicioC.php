<?php

    class InicioC{


        public function MostrarInicioC(){
                
            $tablaBD = "inicio";
            $id = "1";
            $resultado = InicioM::MostrarInicioM($tablaBD, $id);

            echo '
            <div class="box-body">
    
            <div class="col-md-6 bg-primary" style="margin-Top: 5%">
    
            <h1>Bienvenido</h1>
    
            <h3>'.$resultado["intro"].'</h3>
    
            <hr>
    
            <h2>Horario:</h2>
            <h3>Desde: '.$resultado["horaE"].'</h3>
            <h3>Hasta: '.$resultado["horaS"].'</h3>
    
            <hr>
    
            <h2>Dirección:</h2>
            <h3>'.$resultado["direccion"].'</h3>
    
            <hr>
    
            <h2>Cotactos:</h2>
            <h3>Teléfono: '.$resultado["telefono"].' <br>
            Correo: '.$resultado["correo"].'
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

                <div class="form-group">

                    <h2>Horario:</h2>
                    Desde: <input type="time" class="input-lg" name="horaE" value="'.$resultado["horaE"].'">
                    Hasta: <input type="time" class="input-lg" name="horaS" value="'.$resultado["horaS"].'">

                </div>

                <h2>Dirección:</h2>
                <input type="text" class="input-lg" name="direccion" value="'.$resultado["direccion"].'">

                <h2>Teléfono:</h2>
                <input type="text" class="input-lg" name="telefono" value="'.$resultado["telefono"].'">

                <h2>Correo:</h2>
                <input type="text" class="input-lg" name="correo" value="'.$resultado["correo"].'">
            </div>

            <div class="col-md-6 col-xs-12">

            <br><br>

            <input type="file" name="logo">
            <br>

            
            

            <h2>Logo:</h2>
                <img src="http://localhost/ViajesFyA/'.$resultado["logo"].'" width="200px" class="img-responsive">
    

            
            
            <input type="hidden" name="logoActual" value="'.$resultado["logo"].'">

            <br><br>

            <h2>Favivon:</h2>
                <img src="http://localhost/ViajesFyA/'.$resultado["favicon"].'" width="200px" class="img-responsive">
    

            
            
            <input type="hidden" name="faviconActual" value="'.$resultado["favicon"].'">

            <br><br>

            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
        </div>
    </form>';
    }
    }


?>