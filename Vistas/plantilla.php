<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CHAYANAN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php

      $favicon = new InicioC();
      $favicon -> FaviconC();
  
  ?>
  

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/dist/css/skins/_all-skins.css">

  <!-- Data Tables -->
  <!-- <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->
   <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/DataTables/dataTables.min.css">


    <!-- fullCalendar -->
    <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="http://localhost/ViajesFyA/Vistas/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">
  <!-- Site wrapper -->


  <?php

  if (isset($_SESSION["Ingresar"]) && $_SESSION["Ingresar"] == true) {


    echo '<div class="wrapper">';

    include "modulos/cabecera.php";

    if($_SESSION["rol"] == "Logistica"){
      include "modulos/menuLogistica.php";
    }else if($_SESSION["rol"] == "JefeArea"){
      include "modulos/menuJefeArea.php";
    }else if($_SESSION["rol"] == "Directivo"){
      include "modulos/menuDirectivo.php";
    }else if($_SESSION["rol"] == "Sistemas"){
      include "modulos/menuSistemas.php";
    }else if($_SESSION["rol"] == "otrosTrabajadores"){
      include "modulos/menuColaboradores.php";
    }
    
  

    

    $url = array();

    if (isset($_GET["url"])) {

      $url = explode("/", $_GET["url"]);

      if ($url[0] == "inicio" || $url[0] == "salir" || $url[0] == "perfil-Otros" || $url[0] == "perfil-O" || $url[0] == "consultas"
        || $url[0] == "E-C" || $url[0] == "padres" || $url[0] == "otrosTrabajadores" || $url[0] == "perfil-Administracion" 
        || $url[0] == "perfil-A" || $url[0] == "Ver-areas" || $url[0] == "Ver-Area-OT" || $url[0] == "Ver-Area-JA" || $url[0] == "Padre" || $url[0] == "OtrosT" 
        || $url[0] == "JefeArea" || $url[0] == "Directivoss" || $url[0] == "historial"|| $url[0] == "historialJA" || $url[0] == "perfil-Padre" 
        || $url[0] == "perfil-P" || $url[0] == "Vuelos" || $url[0] == "VuelosJA" || $url[0] == "VuelosC" || $url[0] == "perfil-Sistemas" || $url[0] == "perfil-S" 
        || $url[0] == "perfil-S" || $url[0] == "secretarias" || $url[0] == "administracion" || $url[0] == "inicio-editar" || $url[0] == "perfil-Directivo" 
        || $url[0] == "perfil-Logistica" || $url[0] == "perfil-L" || $url[0] == "perfil-otrosTrabajadores" || $url[0] == "perfil-oT"
        || $url[0] == "perfil-Directivo" || $url[0] == "perfil-D" || $url[0] == "perfil-JefeArea" || $url[0] == "perfil-JA" || $url[0] == "colegios" || $url[0] == "E-Co"
        || $url[0] == "busqueda" || $url[0] == "VuelosTabla" || $url[0] == "CalendarioG" || $url[0] == "sistemas") {

        include "modulos/" . $url[0] . ".php";
      }
    } else {

      include "modulos/inicio.php";
    }

    echo '</div>';

  } else if (isset($_GET["url"])) {

    if ($_GET["url"] == "seleccionar") {

      include "modulos/seleccionar.php";

    } else if ($_GET["url"] == "ingreso-Logistica") {

      include "modulos/ingreso-Logistica.php";
    }else if ($_GET["url"] == "ingreso-Colaborador") {

      include "modulos/ingreso-Colaborador.php";
      
    }else if ($_GET["url"] == "ingreso-JefeArea") {

      include "modulos/ingreso-JefeArea.php";

    }else if ($_GET["url"] == "ingreso-Sistemas") {

      include "modulos/ingreso-Sistemas.php";
      
    }else if ($_GET["url"] == "ingreso-Directivo") {

      include "modulos/ingreso-Directivo.php";
    }
  } else {

    include "modulos/seleccionar.php";
  }


  ?>




  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->


  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="http://localhost/ViajesFyA/Vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="http://localhost/ViajesFyA/Vistas/dist/js/demo.js"></script>

  <!-- DataTables
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/datatables.net/js/jquery.dataTables.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->



  <script type="text/javascript" src="http://localhost/ViajesFyA/Vistas/bower_components/DataTables/dataTables.min.js"></script> 
      <!-- para usar botones en datatables JS -->  
    <script src="http://localhost/ViajesFyA/Vistas/bower_components/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="http://localhost/ViajesFyA/Vistas/bower_components/DataTables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="http://localhost/ViajesFyA/Vistas/bower_components/DataTables/pdfmake.min.js"></script>    
    <script src="http://localhost/ViajesFyA/Vistas/bower_components/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="http://localhost/ViajesFyA/Vistas/bower_components/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

<!-- fullCalendar -->
<script src="http://localhost/ViajesFyA/Vistas/bower_components/moment/moment.js"></script>
<script src="http://localhost/ViajesFyA/Vistas/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="http://localhost/ViajesFyA/Vistas/bower_components/fullcalendar/dist/locale/es.js"></script>

  <script src="http://localhost/ViajesFyA/Vistas/js/citas.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/js/padres.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/js/otrosT.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/js/secretarias.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/js/trabajadores.js"></script>
  <script src="http://localhost/ViajesFyA/Vistas/js/sistemas.js"></script>


  <script>
    $(document).ready(function() {
      $('.sidebar-menu').tree()
    });

    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    $('#calendar').fullCalendar({   

      // hiddenDays: [0, 6],
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'agendaDay, agendaWeek, month, listMonth',
        },
        locale: 'es',
        
              //para que me salga el + en el calendario
        eventLimit: true, // for all non-agenda views
          views: {
          agenda: {
          eventLimit: 6,
           // adjust to 6 only for agendaWeek/agendaDay
      }
    },

        height: 800,
        contentHeight: 780,
        aspectRatio: 3,
        nowIndicator: true,

      dayMaxEvents: false,
      navLinks: true,
        
      views: {
        listWeek:{"buttonText": "Eventos Semanales"},
        listMonth:{"buttonText": "Eventos Anuales"},
    },
    



      
    
      events: [
        <?php
          
          $resultado = CitasC::VerCitasC();

          foreach ($resultado as $key => $value){

            if($value["id_padre"] ==  substr($_GET["url"], 6)){

              echo '{
                
                id: "'.$value["id"].'",
                title: "'.$value["nyaP"].'",
                description: "'.$value["comentario"].'",
                colegioC: "'.$value["colegio"].'",
                start: "'.$value["inicio"].'",
                end: "'.$value["fin"].'",
                color: "'.$value["color"].'",
                editable: true //para editar o mover los eventos creados

              },';
              

            }else if($value["id_padre"] ==  substr($_GET["url"], 7)){
              
              echo '{
                
                id: "'.$value["id"].'",
                title: "'.$value["nyaP"].'",
                description: "'.$value["comentario"].'",
                colegioC: "'.$value["colegio"].'",
                start: "'.$value["inicio"].'",
                end: "'.$value["fin"].'",
                color: "'.$value["color"].'",
                editable: true //para editar o mover los eventos creados
              },';
            }else if($value["id_padre"] ==  substr($_GET["url"], 9)){
              
              echo '{
                
                id: "'.$value["id"].'",
                title: "'.$value["nyaP"].'",
                description: "'.$value["comentario"].'",
                colegioC: "'.$value["colegio"].'",
                start: "'.$value["inicio"].'",
                end: "'.$value["fin"].'",
                color: "'.$value["color"].'",
                editable: true //para editar o mover los eventos creados
              },';
            }
      }
          ?>
          
      ],

    eventRender: function(eventObj, $el) {
      $el.popover({
        placement : 'top',
        html : true,
        trigger : 'hover',
        title: eventObj.title + ' <a href="#" class="close" data-dismiss="alert">×</a>',
        content: eventObj.colegioC + 
        '<br> ' + eventObj.description + '</br>' + 
        '<p>' + eventObj.start.format('h:mm a ddd MMM Do YYYY') +
        '<p>' + eventObj.end.format('h:mm a ddd MMM Do YYYY'),
        trigger: 'hover',
        placement: 'top',
        container: 'body'
      });
    },
      //solo se borra esto y se arregla todo
      // slotLabelFormat:{
      // hour: '2-digit',
      // minute: '2-digit',
      // hour12: true,
      // meridiem: 'short'
      // },
      

      defaultView : "month",
      timeFormat: 'H(:mm)t',


      eventClick: function (info, jsEvent, view){
        $('#CalendarioModal').modal();
        console.log(info);
        // document.getElementById('idC').value = info.id;
        // document.getElementById('titleC').value = info.title;
        // document.getElementById('colegioC').value = info.colegioC;
        // document.getElementById('horaS').value = info.start._i;
        // document.getElementById('horaF').value = info.end._i;
        // document.getElementById('description').value = info.description;

        // var dateString = (info.start);
        // moment(dateString).format('YYYY-MM-DD HH:mm');
        // alert(dateString.toDateString);


        $('#idC').val(info.id);
        $('#titleC').val(info.title);
        $('#colegioC').val(info.colegioC);
        $('#horaS').val(info.start._i);
        $('#horaF').val(info.end._i);
        $('#description').val(info.description);
        
        // console.log(info.title);
        // console.log(info.start);
        // console.log(info.end);
        // console.log(info.description);
        },

      // dayClick: function(date, jsEvent, view) {

      //   $('#CitaModal').modal();
      //   console.log(date);
      //   var fecha = date.format();

      //   //las horas en el calendario
      //   var hora2 = ("01:00:00").split(":");

      //   fecha = fecha.split("T");
      //   var dia = fecha[0];

      //   var hora = (fecha[1].split(":"));
      //   var h1 = parseFloat(hora[0]);
      //   var h2 = parseFloat(hora2[0]);
      //   var horaF = h1 + h2;
        
      //   $('#fechaC').val(dia);

      //   $('#horaC').val(h1 + ":00:00");

      //   $('#fyhIC').val(fecha[0] + " " + h1 + ":00:00");
      //   $('#fyhFC').val(fecha[0] + " " + horaF + ":00:00");

      // },

      

    });

    $('#calendarG').fullCalendar({   


        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'agendaDay, agendaWeek, month',
        },
        
        

        height: 800,
        contentHeight: 780,
        aspectRatio: 3,
        nowIndicator: true,

              dayMaxEvents: false,
      navLinks: true,

      // para que me salga el + en el calendario
        eventLimit: true, // for all non-agenda views
          views: {
          agenda: {
          eventLimit: 6,
           // adjust to 6 only for agendaWeek/agendaDay
      }
    },
        


        events: [

          <?php



            foreach ($resultado as $key => $value){

               echo '{
                
                id: "'.$value["id"].'",
                title: "'.$value["nyaP"].'",
                description: "'.$value["comentario"].'",
                colegioC: "'.$value["colegio"].'",
                start: "'.$value["inicio"].'",
                end: "'.$value["fin"].'",
                color: "'.$value["color"].'",
                editable: true //para editar o mover los eventos creados
              },';
            }

          ?>
          ],

  eventRender: function(eventObj, $el) {
    $el.popover({
      placement : 'top',
      html : true,
      trigger : 'hover',
      title: eventObj.title + ' <a href="#" class="close" data-dismiss="alert">×</a>',
      content: eventObj.colegioC + 
      '<br> ' + eventObj.description + '</br>' + 
      '<p>' + eventObj.start.format('h:mm a ddd MMM Do YYYY') +
      '<p>' + eventObj.end.format('h:mm a ddd MMM Do YYYY'),
      trigger: 'hover',
      placement: 'top',
      container: 'body'
    });
  },


      defaultView : "month",
      timeFormat: 'H(:mm)t',


      eventClick: function (info, jsEvent, view){
        $('#CalendarioModal').modal();
        console.log(info);

        // var dateString = (info.start);
        // moment(dateString).format('YYYY-MM-DD HH:mm');
        // alert(dateString.toDateString);


        $('#idC').val(info.id);
        $('#titleC').val(info.title);
        $('#colegioC').val(info.colegioC);
        $('#horaS').val(moment(info.start).format('DD-MM-YYYY / HH:mm'));
        $('#horaF').val(moment(info.end).format('DD-MM-YYYY / HH:mm'));
        $('#description').val(info.description);
        
        // console.log(info.title);
        // console.log(info.start);
        // console.log(info.end);
        // console.log(info.description);
        },  


    });
  </script>
</body>

</html>