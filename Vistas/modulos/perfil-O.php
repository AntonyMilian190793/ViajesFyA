<?php

if ($_SESSION["rol"] != "Otros") {

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

            $editarPerfil = new OtrosC();
            $editarPerfil -> EditarPerfilOtrosC();
            $editarPerfil -> ActualizarPerfilOtrosC();

            ?>





            </div>
        </div>
    </section>

</div>