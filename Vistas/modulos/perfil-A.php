<?php

if ($_SESSION["rol"] != "Administracion") {

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

            $editarPerfil = new AdministracionC();
            $editarPerfil -> EditarPerfilAdministracionC();
            $editarPerfil -> ActualizarPerfilAdministracionC();

            ?>


    
            </div>
        </div>
    </section>

</div>