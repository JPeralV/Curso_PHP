<?php
//Conexion
$server = "localhost";
$username = "root";
$password = "";
$database = "galvario" ;
$db = mysqli_connect($server,$username,$password,$database);

mysqli_query($db, "SET NAMWS 'utf8'");

//Iniciar la sesion
session_start();
