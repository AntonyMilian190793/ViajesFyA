<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Logistica" && $_SESSION["rol"] != "JefeArea" && $_SESSION["rol"] != "Sistemas") {

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
        }
        ?>

        
        <!-- <br>
            <div class="crow g-3">
                    <input type="text" class="form-control" name="caja_busqueda" id="caja_busqueda" placeholder="Búsqueda">
            </div> -->
        

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

                        echo '<div class="form-group">
                            <h2>Su documento es...</h2>
                            <input type="text" class="form-control input-lg" name="documentoC" value="'.$_SESSION["documento"].'" readonly>
                        </div>
                        
                        <div class="form-group">
                            <h2>Seleccionar trabajador:</h2>
                            <select class="form-control input-lg" name="nombreP">
                                <option>Trabajador...</option>

                                
                        </div>';
                        

                        $columna = null;
                        $valor = null;
                        $resultado	= OtrosTC::VerOtrosTC($columna, $valor);

                        foreach ($resultado as $key => $value) {

                            echo '<option value="'.$value["nombre"].' '.$value["apellido"].'">'.$value["nombre"].' '.$value["apellido"].'</option>';
                        }
                        ?>



                        <div class="form-group">
                            <h2></h2>
                            <input type="hidden" class="form-control input-lg" name="">
                        </div>  

                        <div class="form-group">
                            <h2>Documento del Trabajador:</h2>
                            <input type="text" class="form-control input-lg" name="documentoP">
                        </div>  
                        
                        <div class="form-group">
                            <h2>Fecha Inicio:</h2>
                            <input type="datetime-local" class="form-control input-lg" name="inicio" value="" >
                            <!-- <input type="text" class="form-control input-lg" name="fyhIC" id="fyhIC" readonly> -->
                        </div>

                        <div class="form-group">
                            <h2>Fecha Fin:</h2>
                            <input type="datetime-local" class="form-control input-lg" name="fin"  value="" >
                            <!-- <input type="text" class="form-control input-lg" name="fyhFC" id="fyhFC" readonly> -->
                        </div>

                        <!-- <div class="form-group">
                            <h2>Hora Inicio:</h2>
                            <input type="text" class="form-control input-lg" id="horaC"  value="" readonly>
                        </div> -->

                        <div class="form-group">
                        </div>
                        
                        <?php
                                                
                        echo '<div class="form-group">
                            <h2>Seleccionar Colegio:</h2>
                            <select class="form-control input-lg" name="nombreCo">
                                <option>Colegio...</option>

                                
                        </div>';

                        $columna = null;
                        $valor = null;
                        $resultado	= ColegiosC::VerColegiosC($columna, $valor);

                        foreach ($resultado as $key => $value) {

                            echo '<option value="'.$value["nombre"].' '.$value["apellido"].'">'.$value["nombre"].' '.$value["apellido"].'</option>';
                        }

                        ?>

                        <div class="form-group">
                            <h2></h2>
                            <input type="hidden" class="form-control input-lg" name="">
                        </div>  

                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" name="comentario">
                        </div>

                        <div class="form-group">
                            <h2>Seleccionar color del Evento:</h2>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="color" type="color" name="color">
                                <label for="color" class="form-label">Color</label>
                        </div>
                        
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
                            <h2>Nombre de Trabajador:</h2>
                            <input type="text" class="form-control input-lg" id="titleC" name="titleC" readonly>
                        </div>  
                        
                        <div class="form-group">
                            <h2>Colegio:</h2>
                            <input type="text" class="form-control input-lg" id="colegioC" name="colegioC" value="" readonly>
                        </div> 

                        <div class="form-group">
                            <h2>Hora Inicio:</h2>
                            <input type="text" class="form-control input-lg" id="horaS"  name="horaS" value="" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Hora Fin:</h2>
                            <input type="text" class="form-control input-lg" id="horaF"  name="horaF" value="" readonly>
                        </div>


                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" id="description" name="description" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>