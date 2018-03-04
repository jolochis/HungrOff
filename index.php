<?php
ini_set('display_errors', 1);
include_once('includes/funciones/conexion.php');
include('includes/templates/header.php');
/*
             if (!$sql) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
    }Para errores */

 ?>


    <section class="seccion contenedor">
          <h2>HungrOff</h2>
          <p></p>
          <table align="center">
           <thead>
             <tr>
               <th>¿Que puedo donar?</th>
             </tr>
           </thead>

           <tbody>
             <tr>
                <td >Ropa</td>
                <td>Abrigos</td>

             </tr>
             <tr>
               <td>Botiquin</td>
               <td>Primeros auxilios</td>
             </tr>
             <tr>
               <td >Alimentos</td>
               <td>No perecederos</td>

             </tr>
           </tbody>

           <tfoot >
             <tr>

               <td colspan="2" align="center">Tu también puedes ayudar</td>

             </tr>
           </tfoot>

          </table>



</seccion>

      <div class="mapa" id="mapa">

      </div>

      <section class="seccion">

    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote cite="http://">
          <p>Apasionada del arte, el deporte y al educacion</p>
       <ul>
         <li>Estudiante de la Licenciatura en Química. </li>
         <li>Experiencia en Servicios Asistenciales y Desarrollo Comunitario (Cruz Roja)</li>
         <li>Asesor Educativo en el Instituto Nacional para la Educación de los Adultos.</li>
         <li>Miembro de VIRAL (Vinculación de Redes de Acción Local), Jalisco.</li>
         <li>Experiencia diversa en emprendimiento, inovación y desarrollo científico.</li>
       </ul>
        <footer class="info-testimoniales clearfix">
          <img src="img/Denisse.jpg" alt="imagenTestimonial" >
         <cite>Denisse Moran <span>Autora intelectual</span></cite>
        </footer>
         </blockquote>
      </div><!-- Testimonial -->

      <div class="testimonial">
        <blockquote>
          <p>Informatico ,amante de la tecnologia y tambien de la musica</p>
        <ul>
          <li>Estudiante de informatica.</li>
          <li>Maestro de ingles</li>
          <li>Musico</li>
        </ul>
          <footer class="info-testimoniales clearfix" >
            <img src="img/Joel.jpg" alt="imagenTestimonial" >
          <cite>Joel Torres <span>Desarrollador</span></cite>
          </footer>
        </blockquote>
      </div> <!-- Testimonial -->

    </div><!--seccion-->

    </section>



        <?php
        ini_set('display_errors', 1);
          try{

              require_once('includes/funciones/conexion.php');
              $sql = "SELECT * FROM usuarios";
              $resultado = $conexion->query($sql);

                while($row = mysqli_fetch_assoc($resultado)) {
                $nombre = $row["nombre"];
                $apellido =$row['apellido'];
                echo $nombre,$apellido;

  }
          }catch(Exception $e){
            $error = $e->getMessage();
          }
        ?>


      </div>
    <?php include('includes/templates/footer.php'); ?>
