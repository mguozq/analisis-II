<?php
session_start();
date_default_timezone_set('America/Guatemala');
 ?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Maco | Motocicletas</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="system/vistas/img/plantilla/moto.png">

  <!--=====================
      PLUGINS DE CSS
   ===================== -->


    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="system/vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="system/vistas/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="system/vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- AdminLTE Skins-->
  <link rel="stylesheet" href="system/vistas/dist/css/skins/_all-skins.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="system/vistas/bower_components/select2/dist/css/select2.min.css">
     <!-- Theme style -->
  <link rel="stylesheet" href="system/vistas/dist/css/AdminLTE.css">
    <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- DataTables -->
  <link rel="stylesheet" href="system/vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="system/vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="system/vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!--css by mg -->
  <link rel="stylesheet" href="system/vistas/css/estilos.css">
   <!-- Morris chart -->
  <link rel="stylesheet" href="system/vistas/bower_components/morris.js/morris.css">
   <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="system/vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">




   <!--=====================
      PLUGINS DE JAVASCRIPT
       ===================== -->
  <!-- jQuery 3 -->
  <script src="system/vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="system/vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="system/vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="system/vistas/dist/js/adminlte.min.js"></script>
  <!-- SlimScroll -->
  <script src="system/vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!--DataTables -->
  <script src="system/vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="system/vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="system/vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="system/vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!--SweetAlert 2-->
  <script src="system/vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- Select2 -->
  <script src="system/vistas/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- daterangepicker-->
  <script src="system/vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="system/vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- Morris.js charts -->
  <script src="system/vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="system/vistas/bower_components/morris.js/morris.min.js"></script>
  <!-- ChartJS -->
  <script src="system/vistas/bower_components/chart.js/Chart.js"></script>
  <!-- bootstrap datepicker -->
  <script src="system/vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="system/vistas/dist/js/demo.js"></script>





</head>


 <!--=====================
    CUERPO DEL DOCUMENTO
     ===================== -->

<body class="hold-transition skin-blue sidebar-mini login-page">

  <?php

  if(isset($_SESSION["session"]) && $_SESSION["session"] == "ok"){

          echo '<div class="wrapper">';

          include "modulos/encabezado.php";
          include "modulos/panel.php";


          /* Contenido */
          if(isset($_GET["ruta"])){

            if($_GET["ruta"] == "inicio"||
                $_GET["ruta"] == "usuarios"||
                $_GET["ruta"] == "taller"||
                $_GET["ruta"] == "egresotaller"||
                $_GET["ruta"] == "servicio-taller"||
                $_GET["ruta"] == "stock"||
                $_GET["ruta"] == "ventas"||
                $_GET["ruta"] == "creditos"||
                $_GET["ruta"] == "clientes"||
                $_GET["ruta"] == "proveedores"||
                $_GET["ruta"] == "ejemplos"||
                $_GET["ruta"] == "salir"){

              include "modulos/".$_GET["ruta"].".php";

            }else{
              include "modulos/404.php";
            }

          }else{
            include "modulos/inicio.php";
          }

          include "modulos/footer.php";

          echo '</div>';
}else{

  include "modulos/login.php";

}

  ?>

<script src="system/vistas/js/plantilla.js"></script>


</body>
</html>
