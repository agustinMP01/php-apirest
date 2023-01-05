<?php
require_once 'controller/UserController.php';
require_once 'controller/AuthController.php';

$opcion = $_GET["opcionControlador"];

if (isset($opcion)) {
  switch ($opcion) {
    case "getUserById":
      getUserById();
      break;
    case "getUserList":
      getUserList();
      break;
    case "deleteUser":
      deleteUserById();
      break;
    case "addUser":
      addNewUser();
      break;
    case "changeUser":
      changeUsername();
      break;
    case "login":
      login();
      break;
  }
} else {
  echo json_encode("oeee pon la ocsion");
}

?>