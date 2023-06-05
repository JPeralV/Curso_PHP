<?php

function showError($errors, $field) {
  $alert = '';
if (isset($errors[$field]) && !empty($field)){
$alert= "<div class= 'alert alert-error'>".$errors[$field].'</div>';
}
return $alert;
}