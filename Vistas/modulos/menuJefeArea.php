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

      <!-- <li>
        <?php
        
          echo '<a href="http://localhost/ViajesFyA/VuelosJA/'.$_SESSION["id"].'">';

        ?>
        
          <i class="fa fa-plane" aria-hidden="true"></i>
          <span>Viajes</span>
        </a>
      </li> -->

      
      <li>
        <a href="http://localhost/ViajesFyA/Ver-Area-JA">
          <i class="fa fa-address-book-o"></i>
          <span>Área</span>
        </a>
      </li>



      <li>
        <?php
        
          echo '<a href="http://localhost/ViajesFyA/historialJA/'.$_SESSION["id"].'">';

        ?>
          <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
          <span>Historial</span>
        </a>
      </li>


    </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>