<?php

include_once 'includes/funciones/sesiones.php';
//para validar la entrada en la pagina voluntario.php
session_start();
if ($_SESSION['tipo']!=2)
{header('Location:donante.php');
}

 ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>




    <header class="site-header">
      <div class="ingreso">
      <a href="logout.php">salir</a>
      </div>

      <div class="hero" >


      </div>
    </header>

    <section class="seccion contenedor">
          <h2>HungrOff</h2>

          <div class="">
            <table>
              <?php
                try {
                  include_once("includes/funciones/conexion.php");
                  $sql = "SELECT * FROM donaciones";
                  $resultado = $conexion->query($sql);

                } catch (\Exception $e) {
                    $error = $e->getMessage();
                }


                ?>

<?php ini_set('display_errors', 1); ?>
              <thead>
                <tr>
                  <th>Donaciones</th>
                </tr>
              </thead>
            <tbody>
          <th>lugar</th>
              <tr>
                <td>
                  <?php
                  foreach ($resultado as $don) {
                    echo $don['zona'];


                  }
                  ?>
                </td>
              </tr>
        <th>Descripcion</th>
              <tr>

              <td>
                <?php
                  foreach ($resultado as $don) {
                echo $don['descripcion'];

              }
              ?>
              </td>
              </tr>
              <tr>
                <th>tipo de articulo</th>
                <tr>
                  <td>
                    <?php
                      while($don = $resultado->fetch_array(MYSQLI_ASSOC)) {
                      echo $don['tipo_articulo'];

                    }
                    ?>
                  </td>
                </tr>
              </tr>
            </tbody>
            </table>
          </div>




</seccion>

      <div class="mapa" id="mapa">

      </div>

      <footer class="footer">
        <div class="redes-sociales">

        </div>

      </footer>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFRO15uoqA0c4aJI8cTnvyqSHTwD_lq6s&callback=initMap"
            async defer></script> <!-- MAPA -->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
