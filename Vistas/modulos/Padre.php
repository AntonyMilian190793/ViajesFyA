<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/ViajesFyA/select2/select2.min.css">
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script src="http://localhost/ViajesFyA/select2/select2.min.js"></script>
</head>
<body>
    
</body>
</html>


<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Logistica"  && $_SESSION["rol"] !="JefeArea" && $_SESSION["rol"] != "Sistemas") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">
        <?php

        $columna = "id";
        $valor = substr($_GET["url"], 6);
        $resultado = PadresC::PadreC($columna, $valor);

        if($resultado["sexo"] == "Femenino"){
            echo '<h1>Jefa: '.$resultado["nombre"].' '.$resultado["apellido"].'</h1>';
        }else{
            echo '<h1>Jefe: '.$resultado["nombre"].' '.$resultado["apellido"].'</h1>';
        }


        $columna = "id";
        $valor = $resultado["id_consulta"];
        $consultorio = ConsultasC::VerConsultasC($columna, $valor);


        echo '        
        <br>
            <h1>Área de : '.$consultorio["nombre"].'</h1>';
        ?>


        <?php
        if($_SESSION["rol"] == "Logistica"){
            echo '            
            <div class="box-header">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CitaModal">Crear Evento</button>
            </div>';
        }else if($_SESSION["rol"] == "Sistemas"){
                        echo '            
            <div class="box-header">
                <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#CitaModal">Crear Evento</button>
            </div>';
        }
        ?>

    </section>


    <section class="content">
        <div class="box">
            <div class="box-body">
                <div id="calendar"></div>
            </div>
        </div>
    </section>

</div>



<div class="modal fade" rol="dialog" id="CitaModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-body">
                    <div class="box-body">

                    <?php

                        $columna = "id";
                        $valor = $resultado["id_consulta"];

                        $consultorio = ConsultasC::VerConsultasC($columna, $valor);

                        echo '                        
                        <div class="form-group">
                            <input type="hidden" name="Cid" value="'.$consultorio["id"].'">
                        </div>';


                            $columna = "id";
                            $valor = substr($_GET["url"], 6);
                            $resultado = PadresC::PadreC($columna, $valor);
                            //<input type="hidden" name="Pid" value="'.$_SESSION["id"].'" >

                            

                            echo '                         
                            
                            <div class="form-group">

                                <h2>Usted es...</h2>
                                <input type="hiden" class="form-control input-lg" name="nyaC" value="'.$_SESSION["nombre"].' '.$_SESSION["apellido"].'" readonly >
                                <input type="hidden" name="Did" value="'.$resultado["id"].'">
                                   
                            </div>';

                        if($_SESSION["rol"] == "Logistica"){
                        echo '<div class="form-group">
                            <h2>Su documento es...</h2>
                            <input type="text" class="form-control input-lg" name="documentoC" value="'.$_SESSION["documento"].'" readonly>
                        </div>';
                        }else if($_SESSION["rol"] == "Sistemas"){

                        }



                        echo '<div class="form-group">
                            <h2>Seleccionar trabajador:</h2>
                            <select class="form-control input-lg" id="controlBuscador" name="nombreP" style="width: 100%">
                             <option>Seleccione trabajador...</option>
                                
                        </div>';



                        $columna = null;
                        $valor = null;
                        $resultado	= OtrosTC::VerOtrosTC($columna, $valor);

                        foreach ($resultado as $key => $value) {

                            echo '<option value="'.$value["nombre"].' '.$value["apellido"].' - '.$value["documento"].'">'.$value["nombre"].' '.$value["apellido"].'</option>';
                        }

                        ?>

                        <div class="form-group">
                        <h2></h2>
                        <input type="hidden" class="form-control input-lg" name="">
                        
                    </div>  
                    
                    <div class="form-group">
                    <h2>Datos del Trabajador:</h2>
                    <input type="text" class="form-control input-lg" name="documentoP"  id="documento" readonly>
                    </div> 

                        
                        <div class="form-group">
                            <h2>Fecha Inicio:</h2>
                            <input type="datetime-local" class="form-control input-lg" name="inicio" value="" required>
                            <!-- <input type="text" class="form-control input-lg" name="fyhIC" id="fyhIC" readonly> -->
                        </div>

                        <div class="form-group">
                            <h2>Fecha Fin:</h2>
                            <input type="datetime-local" class="form-control input-lg" name="fin"  value="" required>
                            <!-- <input type="text" class="form-control input-lg" name="fyhFC" id="fyhFC" readonly> -->
                        </div>

                        <!-- <div class="form-group">
                            <h2>Hora Inicio:</h2>
                            <input type="text" class="form-control input-lg" id="horaC"  value="" readonly>
                        </div> -->

                        <div class="form-group">
                        </div>
                        
                        <?php
                        if($_SESSION["nombre"] == "Angela"){
                                                
                        echo '<div class="form-group">
                            <h2>Seleccionar Colegio:</h2>
                            <select class="form-control input-lg" id="controlBuscadora" name="nombreCo" style="width: 100%">
                                <option>Colegio...</option>

                                
                        </div>';

                        $columna = null;
                        $valor = null;
                        $resultado	= ColegiosC::VerColegiosC($columna, $valor);

                        

                        foreach ($resultado as $key => $value) {

                            echo '<option value="'.$value["nombre"].' ">'.$value["nombre"].'</option>';
                        }

                    }if($_SESSION["nombre"] == "Jorge Antony"){
                         echo '<div class="form-group">

                            <h2>Seleccionar Colegio:</h2>
                            <select class="form-control input-lg" id="controlBuscadora" name="nombreCo" style="width: 100%">
                                <option>Colegio...</option>

                                
                        </div>';

                        $columna = null;
                        $valor = null;
                        $resultado	= ColegiosC::VerColegiosC($columna, $valor);

                        

                        foreach ($resultado as $key => $value) {

                            echo '<option value="'.$value["nombre"].' '.$value["apellido"].'">'.$value["nombre"].' '.$value["apellido"].'</option>';
                        }

                    }
                    else if($_SESSION["nombre"] == "Nataly Grecia"){

                            echo '<div class="form-group">
                            <h2>Seleccionar:</h2>
                            <select class="form-control input-lg" id="controlBuscadora" name="nombreCo" style="width: 100%">
                                <option>Seleccionar...</option>
                                <option>Vacaciones</option>
                                <option>Otros</option>

                        </div>';
                        
                    }else if($_SESSION["nombre"] == "Julia"){
                        echo '<div class="form-group">
                            <h2>Seleccionar:</h2>
                            <select class="form-control input-lg" id="controlBuscadora" name="nombreCo" style="width: 100%">
                                <option>Seleccionar...</option>
                                <option>Vacaciones</option>
                                <option>Otros</option>
                        </div>';
                    }

                        ?>

                        <div class="form-group">
                            <h2></h2>
                            <input type="hidden" class="form-control input-lg" name="">
                        </div>  

                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" name="comentario" >
                        </div>

                        <div class="form-group">
                        <h2>Color del Evento:</h2>
                        <select name="color" class="form-control input-lg" id="color" >

                            <?php
                                        $columna = "id";
                                        $valor = substr($_GET["url"], 6);
                                        $resultado = PadresC::PadreC($columna, $valor);
                                        $columna = "id";
                                        $valor = $resultado["id_consulta"];
                                        $consultorio = ConsultasC::VerConsultasC($columna, $valor);


  
                                        if($consultorio["nombre"] == "Contabilidad"){
                                            echo'<option style="color:#CD5C5C" value="#CD5C5C">&#9724; IndianRed</option>';
                                        }

                                        if($consultorio["nombre"] == "Comunicación e Incidencia"){
                                            echo'<option style="color:#FF6347" value="#FF6347">&#9724; Tomato</option>';
                                        }

                                        if($consultorio["nombre"] == "Identidad y Misión"){
                                            echo'<option style="color:#9ACD32" value="#9ACD32">&#9724; YellowGreen</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "Directivos"){
                                            echo'<option style="color:#FFBF65" value="#FFBF65">&#9724; Amarillo-Cian</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "EBA"){
                                            echo'<option style="color:#87CEEB" value="#87CEEB">&#9724; Sky-Blue</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "EBR Urbano"){
                                            echo'<option style="color:#6C88C4" value="#6C88C4">&#9724; Azul-Turquesa</option>';
                                        }

                                        if($consultorio["nombre"] == "EBR Rural"){
                                            echo'<option style="color:#c3dff9" value="#c3dff9">&#9724; Azul-Turquesa</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "EPTT"){
                                            echo'<option style="color:#C05780" value="#C05780">&#9724; Rosa</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "FyA Digital"){
                                            echo'<option style="color:#00B0BA" value="#00B0BA">&#9724; Turquesa</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "Legal"){
                                            echo'<option style="color:#B196C1" value="#B196C1">&#9724; Morado-Magenta</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "Logística"){
                                            echo'<option style="color:#57838D" value="#57838D">&#9724; Verde-Musgo</option>';
                                        }
                                        
                                        if($consultorio["nombre"] == "Proyectos"){
                                            echo'<option style="color:#BDB76B" value="#BDB76B">&#9724; DarkKhaki</option>';
                                        }

                                        if($consultorio["nombre"] == "Recaudo y Voluntariado"){
                                            echo'<option style="color:#6A5ACD" value="#6A5ACD">&#9724; SlateBlue</option>';
                                        }

                                        if($consultorio["nombre"] == "Recursos Humanos"){
                                            echo'<option style="color:#6B8E23" value="#6B8E23">&#9724; OliveDrab</option>';
                                        }

                                        if($consultorio["nombre"] == "Sistemas"){
                                            echo'<option style="color:#4682B4" value="#4682B4">&#9724; SteelBlue</option>';
                                        }


                                        ?>


<!-- 
                            <option style="color:#D50000" value="#D50000">&#9724; Tomate</option>
                            <option style="color:#E67C73" value="#E67C73">&#9724; Rosa chicle</option>
                            <option style="color:#F4511E" value="#F4511E">&#9724; Mandarina</option>						  
                            <option style="color:#F6BF26" value="#F6BF26">&#9724; Amarillo huevo</option>
                            <option style="color:#33B679" value="#33B679">&#9724; Verde esmeralda</option>
                            <option style="color:#0B8043" value="#0B8043">&#9724; Verde musgo</option>
                            <option style="color:#039BE5" value="#039BE5">&#9724; Azul turquesa</option>
                            <option style="color:#3F51B5" value="#3F51B5">&#9724; Azul arándano</option>
                            <option style="color:#7986CB" value="#7986CB">&#9724; Lavanda</option>
                            <option style="color:#8E24AA" value="#8E24AA">&#9724; Morado intenso</option>
                            <option style="color:#616161" value="#616161">&#9724; Grafito</option> -->

						</select>
                         
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>

                <?php
                
                    $enviarC = new CitasC();
                    //$enviarC->EnviarCitaC();
                    $enviarC->PedirCitaLogisticaC();
                
                ?>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" rol="dialog" id="CalendarioModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <input type="hidden" class="form-control input-lg" name="idC" id="idC" readonly>
                        </div>  

                        <div class="form-group">
                            <h2>Datos del Trabajador:</h2>
                            <input type="text" class="form-control input-lg" id="titleC" name="titleC" readonly>
                        </div>  
                        
                        <div class="form-group">
                            <h2>Colegio y/o Descripción:</h2>
                            <input type="text" class="form-control input-lg" id="colegioC" name="colegioC" value="" readonly>
                        </div> 

                        <div class="form-group">
                            <h2>Fecha Inicio:</h2>
                            <input type="datetime-local" class="form-control input-lg" id="horaS"  name="horaS" value="" >
                        </div>

                        <div class="form-group">
                            <h2>Fecha Fin:</h2>
                            <input type="datetime-local" class="form-control input-lg" id="horaF"  name="horaF" value="" >
                        </div>


                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" id="description" name="description">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Editar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
$('#controlBuscador').select2({
        dropdownParent: $('#CitaModal .modal-body')
    });
</script>

<script>
$('#controlBuscadora').select2({
        dropdownParent: $('#CitaModal .modal-body')
    });
</script>



<script>

document.getElementById('controlBuscador').onchange = function() {
  /* Referencia al option seleccionado */
  var mOption = this.options[this.selectedIndex];
  /* Referencia a los atributos data de la opción seleccionada */
  var mData = mOption.dataset;

  /* Referencia a los input */
  var elDocumento = document.getElementById('documento');


  /* Asignamos cada dato a su input*/
  elDocumento.value = this.value;


};

</script>