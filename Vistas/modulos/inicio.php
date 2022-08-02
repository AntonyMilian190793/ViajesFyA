<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      
    <div class="box">

    <?php

      $inicio = new InicioC();
      $inicio -> MostrarInicioC();

      if($_SESSION['rol'] == "Sistemas"){
        
        echo '
        <div class="box-footer">
          <a href="inicio-editar">
            <button class="btn btn-success btn-lg">Editar</button>
          </a>
        </div>';

      }
    
    ?>

        
    

        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

<footer class="main-footer cente">
<center>© 2021 Antony Milian. Todos los Derechos Reservados</a>.</center>


</footer>