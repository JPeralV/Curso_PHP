<?php

/* Conectar a la base de datos */

$conexion = mysqli_connect("localhost", "root", "", "phpmysql");
//Comprobar si la conexion es correcta
if(mysqli_connect_errno()) {
echo "La conexion ha fallado".mysqli_connect_errno();
}else{
  echo "𐐘";
}

/* Consulta para la codificacion de caracteresv */

mysqli_query($conexion, "SET NAMES 'utf8'");

/*Consulta SELECT desde PHP*/

$notas = mysqli_query($conexion, "SELECT * FROM notas");

var_dump($notas);

$query = mysqli_query($conexion, "SELECT * FROM notas");
//$notasq = mysqli_fetch_assoc($query);
//var_dump($notasq);


while($nota = mysqli_fetch_assoc($query)){
  //var_dump($nota);
  echo "<h2>". $nota['titulo'] . '<br/>';

  echo "<p>" . $nota['descripcion'] .'<br/>';
}

//Insertar en la base de datos desde php

$sql = "INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota desde PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
  echo "Registro de datos correcto";
}else{
  echo "Error: ".mysqli_error($conexion);
}
