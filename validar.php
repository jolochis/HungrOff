<?php if (isset($_POST['submit'])):
  $nombre      = $_POST['nombre'];
  $apellido    = $_POST['apellido'];
//  $pass        = $_POST['pass'];
  $pass        =htmlspecialchars(trim("$_POST['password']"));
  $pass_hashed = password_hash($pass, PASSWORD_BCRYPT);
  $correo      = $_POST['email'];
  $id          =$_POST['select'];

ini_set('display_errors', 1);
        try{
            include_once("includes/funciones/conexion.php");
            $stmt = $conexion->prepare("INSERT INTO usuarios (nombre,apellido,correo,pass,id_tipo_usuario) VALUES (?,?,?,?,?)");
            $stmt-> bind_param("ssssi", $nombre,$apellido,$correo,$pass_hashed,$id);
            $stmt->execute();

            $stmt->close();
            $conexion->close();
          header('Location:validar.php?exitoso=1');

          }catch(Exception $e){
            $error = $e->getMessage();
          }
endif;
if (isset($_GET['exitoso'])):

  if($_GET['exitoso']==1):

    echo "registro exitoso";
header("refresh:3; url=login.php"  );
  endif;
endif;
?>
