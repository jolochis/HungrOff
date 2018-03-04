<?php

  $conexion = new mysqli('localhost', 'root', '', 'proyect');

  if($conexion->connect_error){
    echo $error -> $conexion->connect_error;
  }
