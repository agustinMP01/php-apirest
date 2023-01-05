<?php
require_once 'C:\xampp\htdocs\php-apirest\model\auth.php';
require_once ROOT_DIR . '\classes\login.class.php';

function login()
{
  if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (exists($username) != true) {
      echo json_encode("usuario no existe");
      die;
    }
    if (validPassword($username, $password) != true) {
      echo json_encode("credenciales invalidas");
      die;
    }

    $respuesta = new LoginClass();
    $respuesta->token = json_encode(getToken($username));
    $respuesta->expiracion =  date("Y-m-d H:i:s", strtotime('+5 hours'));
    echo 'Bienvenido '.$username.' ';
    echo 'Tu token es '.$respuesta->token;
    return $respuesta;
  } else {
    echo json_encode("oe pero pa k po");
  }
}
