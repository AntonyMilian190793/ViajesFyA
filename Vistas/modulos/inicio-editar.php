<?php

if ($_SESSION["rol"] != "Sistemas") {

    echo '<script>
        
        window.location = inicio;
        </script>';

    return;
}

?>

<div class="content-wrapper">

    <section class="content">

        <div class="box">

            <div class="box-body">

            <?php

            $editarInicio = new InicioC();
            $editarInicio -> EditarInicioC();
            //$editarPerfil -> ActualizarPerfilAdministracionC();

            ?>


    
            </div>
        </div>
    </section>

</div>