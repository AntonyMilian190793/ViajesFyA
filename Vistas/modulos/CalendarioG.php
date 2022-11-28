<?php

if ($_SESSION["rol"] != "Directivo") {

    echo '<script>
  
  window.location = "inicio";

  </script>';
}

?>

<div class="content-wrapper">

    <section class="content-header">


    </section>


<section class="content">
    <div class="box">
        <div class="box-body">
            <div id="calendar"></div>
        </div>
    </div>
</section>

</div>
