<?php
if (mysquli_connect_errno()) {
  echo "La conexion ha fallado: ".mysquli_connect_error();
}else{
  echo "Conexion realizada correctamente";
}

//Consulta para configurar la codificacion de caracteres

mysqli_query($conexion, "SET NAMES 'utf8");
