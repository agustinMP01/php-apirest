<?php
require_once ROOT_DIR . '/model/user.php';
require_once ROOT_DIR . '/classes/usuario.class.php';

function getUserById()
{
  if (isset($_POST["IdUsuario"]) && $_POST["IdUsuario"] != 0) {
    $idUsuario = $_POST["IdUsuario"];
    $datos = ListaUsuarios($idUsuario);
    $obj_respuesta = userDataArrayToUserClassArray($datos);
    echo json_encode($obj_respuesta);
    // devolver la respuesta como json
  } else {
    echo json_encode("oe pero pa k po");
    // mandar mensaje de error en json
  }
}
function getUserList()
{
  $datos = ListaUsuarios(null);
  $respuesta = userDataArrayToUserClassArray($datos);

  echo json_encode($respuesta);
}


function userDataToUserClass($userData)
{
  $user_obj = new Usuario();
  $user_obj->id = $userData["ID"];
  $user_obj->nombre = $userData["username"];
  return $user_obj;
}
function userDataArrayToUserClassArray($userDataArray)
{
  $respuesta = [];
  foreach ($userDataArray as $value) {
    array_push($respuesta, userDataToUserClass($value));
  }
  return $respuesta;
}

function deleteUserById() {
  if (isset($_POST["IdUsuario"]) && $_POST["IdUsuario"] != 0) {
    $idUsuario = $_POST["IdUsuario"];
    $check = deleteUser($idUsuario);
    if ($check == false) {
      echo json_encode("Error, comiste");
    } else {
    echo json_encode("user deleted succesfully");
    }
    // devolver la respuesta como json
  } else {
    echo json_encode("oe pero pa k po");
    // mandar mensaje de error en json
  }
}

function addNewUser() {
  if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $check = addUser($username, $password);
    if ($check == false) {
      echo json_encode("Error, comiste");
    } else {
    echo json_encode("user added succesfully");
    }
    // devolver la respuesta como json
  } else {
    echo json_encode("oe pero pa k po");
    // mandar mensaje de error en json
  }
}

function changeUsername() {
  if (isset($_POST["newUsername"]) && isset($_POST["idUser"])) {
    $newUsername = $_POST["newUsername"];
    $idUser = $_POST["idUser"];
    $check = changeUsernameById($idUser, $newUsername);
    if ($check == false) {
      echo json_encode("Error, comiste");
    } else {
    echo json_encode("user changed succesfully");
    }
    // devolver la respuesta como json
  } else {
    echo json_encode("oe pero pa k po");
    // mandar mensaje de error en json
  }
}
