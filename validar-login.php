<?php
  if (isset($_POST['submit'])) {

    $user = $_POST['lnombre'];
    $password = $_POST['lpass'];

try{
    include_once("includes/funciones/conexion.php");

    $stmt = $conexion->prepare("SELECT * FROM usuarios where nombre = ? ;");
    $stmt-> bind_param("s", $user);
    $stmt->execute();
    $stmt->bind_result($id,$nombre,$apellido,$correo,$pass,$id_tipo_usuario);

    if ($stmt->affected_rows) {
      $existe = $stmt->fetch();
      if ($existe) {
        if (password_verify($password,$pass)) {
          session_start();
          $_SESSION['usuario'] = $nombre;
          $_SESSION['tipo'] = $id_tipo_usuario;
          $_SESSION['logged'] = true;
          if ($id_tipo_usuario == 1) {
            header('Location:donante.php');
          }else {
            header('Location:voluntario.php');
          }
        }else {
          echo "usuario o contraseña equivocada";
          header("refresh:3; url=login.php"  );

        }

        }else {
          echo "no registrado en la base de datos";
          header("refresh:3; url=registro.php"  );
        }

    }//rows


   $stmt->close();
   $conexion->close();

 }//try
  catch(Exception $e){
    $error = $e->getMessage();
  }


}// Termina if
 ?>
