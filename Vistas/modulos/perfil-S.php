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

            $editarPerfil = new SistemasC();
            $editarPerfil -> EditarPerfilSistemasC();
            $editarPerfil -> ActualizarPerfilSistemasC();
            

            ?>




            </div>
        </div>
    </section>

</div>