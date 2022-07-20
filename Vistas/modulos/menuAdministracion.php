<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    <ul class="sidebar-menu">
      <li>
        <a href="http://localhost/ViajesFyA/inicio">
          <i class="fa fa-home"></i>
          <span>Inicio</span>
        </a>
      </li>


      <li>
        <a href="http://localhost/ViajesFyA/Ver-areas">
          <i class="fa fa-address-book-o"></i>
          <span>Ver Áreas</span>
        </a>
      </li>

      <li>
        <?php
        
          echo '<a href="http://localhost/ViajesFyA/historial/'.$_SESSION["id"].'">';

        ?>
          <i class="fa fa-calendar-check-o"></i>
          <span>Historial</span>
        </a>
      </li>

    </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>