<?php

if ($_SESSION["rol"] != "Padre") {

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

            $editarPerfil = new PadresC();
            $editarPerfil -> EditarPerfilPadreC();
            $editarPerfil -> ActualizarPerfilPadreC();
            

            ?>




            </div>
        </div>
    </section>

</div>