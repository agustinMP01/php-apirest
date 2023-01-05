<?php
require_once 'connection.php';

function exists($username)
{
    $sql = "select id from users.users";
    if (isset($username)) {
        $sql .= " where users.username = '$username'";
    }

    $conn = GetConnection();
    $result = $conn->query($sql);
    $conn->close();
    $idUser = $result->fetch_row()[0];
    if (isset($idUser)) {
      return true;
    } else {
      return false;
    }
}
function validPassword($username, $password)
{
    $sql = "select password from users.users";
    if (isset($username)) {
        $sql .= " where users.username = '$username'";
    }

    $conn = GetConnection();
    $result = $conn->query($sql);
    $result = $result->fetch_row();
    $conn->close();

    if ($password != $result[0]) {
      return false;
    } else {
      return true;
    }

}
function getToken($username) {
  return 'token';
}
