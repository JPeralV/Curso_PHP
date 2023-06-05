<?php
session_start();

if (isset ($_POST)){
  //Recoger los valores del formulario de registro
  $name = isset($_POST['name']) ? $_POST['name']:false;
  $last_name = isset($_POST['last_name']) ? $_POST['last_name']:false;
  $nick = isset($_POST['nick']) ? $_POST['nick']:false;
  $email = isset($_POST['email']) ? $_POST['email']:false;
  $password = isset($_POST['password']) ? $_POST['password']:false;

//Array de errores
$errors = array();


//Validar los datos antes de guardarlo

if(!empty ($name) && !is_numeric($name) && !preg_match("/[0-9]/",$name)){
  $validName = true;
}else{
  $validName = false;
  $errors['name'] = "No se admiten roboses en este site";

}if(!empty ($last_name) && !is_numeric($last_name) && !preg_match("/[0-9]/",$last_name)){
  $validLastName = true;
}else{
  $validLastName = false;
  $errors['last_name'] = "No se admiten numeros de serie roboses en este site";

}if(!empty ($nick)){
  $validNick = true;
}else{
  $validNick = false;
  $errors['nick'] = "No se admiten nicks roboses en este site";

}if(!empty ($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
  $validEmail = true;
}else{
  $validEmail = false;
  $errors['email'] = "No se admiten mails roboses en este site";

}if(!empty ($password)){
  $validPassword = true;
}else{
  $validPassword = false;
  $errors['password'] = "No se admiten contraseñas roboses en este site";
}

$saveUser = false;
if(count($errors) ==0){
$saveUser = true;
}else{
  $_SESSION['errors'] = $errors;
  header('Location: index.php');
}

}