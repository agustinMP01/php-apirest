<?php
require_once 'connection.php';

function ListaUsuarios($idUsuario = null)
{
    $sql = "select * from users.users";
    if (isset($idUsuario)) {
        $sql .= " where users.id = " . $idUsuario;
    }

    $conn = GetConnection();
    $result = $conn->query($sql);
    //$result = $result->fetch_assoc();
    $conn->close();
    return $result;
}

function deleteUser($idUsuario) {
  $sql = "update users.users set deleted=1 where ID = $idUsuario";
  $conn = GetConnection();
  $conn->query($sql);
  $conn->close();
  return true;
}

function addUser($username, $password) {
  $sql = "insert into users.users(`username`, `password`) values ('$username','$password')";
  $conn = GetConnection();
  $conn->query($sql);
  $conn->close();
  return true;
}

function changeUsernameById($idUser, $newUsername) {
  $sql = "update users.users set username = '$newUsername' where ID = $idUser";
  $conn = GetConnection();
  $conn->query($sql);
  $conn->close();
  return true;
}
