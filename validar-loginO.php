<?php
  if (isset($_POST['submit'])) {

    $user = $_POST['lnombre'];
    $password = $_POST['lpass'];

try{
    include_once("includes/funciones/conexion.php");

    $stmt = $conexion->prepare("SELECT * FROM usuarios where nombre = ? and pass = ?;");
    $stmt-> bind_param("ss", $user, $password);
    $stmt->execute();
    $stmt->bind_result($id,$nombre,$apellido,$correo,$pass,$id_tipo_usuario);

    $stmt->store_result();

    if ($stmt->affected_rows) {
      $existe =   $stmt->fetch();
      /*if ($user == $nombre or $password == $pass) {
      echo "ususario o contraseña incorrecta";
      header('');
    }*/
      if ($user == $nombre and $password == $pass) {
        echo "encontrado";
      }
}else {
  header( "refresh:5; url=login.php" );

  echo "no se encuentra en la base de datos";
  //header('Location:login.php');
}
   $stmt->close();
   $conexion->close();

 }//try
  catch(Exception $e){
    $error = $e->getMessage();
  }
}// Termina if
 ?>
