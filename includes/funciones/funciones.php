<?php
try{
    include_once("conexion.php");

    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre,apellido,correo,pass) VALUES (?, ?, ?, ?)");
    $stmt-> bind_param("ssss", $nombre,$apellido,$correo,$pass);
    $nombre = "joel";
    $apellido= "torres";
    $correo= "aasdds@gmail.com";
    $pass = "asdjfi9230944";
    $stmt->execute();
    echo "string";
    $stmt->close();
    $conexion->close();
  }catch(Exception $e){
    $error = $e->getMessage();
  }

 ?>
