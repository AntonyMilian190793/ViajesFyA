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
    }


?>