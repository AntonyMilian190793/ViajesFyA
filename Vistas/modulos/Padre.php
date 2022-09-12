<?php

if ($_SESSION["rol"] != "Directivo" && $_SESSION["rol"] != "Logistica" && $_SESSION["rol"] != "JefeArea") {

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
            echo '<h1>Trabajadora: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';
        }else{
            echo '<h1>Trabajador: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';
        }


        $columna = "id";

        $valor = $resultado["id_consulta"];

        $consultorio = ConsultasC::VerConsultasC($columna, $valor);


        echo '        
        <br>
            <h1>Área de : '.$consultorio["nombre"].'</h1>';
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

                        ?>

                        <?php

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
                            <h2>Documento del Trabajador:</h2>
                            <input type="text" class="form-control input-lg" name="documentoP">
                        </div>  

                        
                        
                        
                        <div class="form-group">
                            <h2>Fecha:</h2>
                            <input type="text" class="form-control input-lg" id="fechaC"  value="" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Hora:</h2>
                            <input type="text" class="form-control input-lg" id="horaC"  value="" readonly>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control input-lg" name="fyhIC" id="fyhIC" readonly>
                            <input type="hidden" class="form-control input-lg" name="fyhFC" id="fyhFC" readonly>
                        </div>

                        <div class="form-group">
                            <h2>Comentario:</h2>
                            <input type="text" class="form-control input-lg" name="comentario">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
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
