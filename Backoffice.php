<?php

require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php";

$email = $_POST['email'];
$password = $_POST['password'];


if (isset($_POST['agr'])) {
  $sql= OficinaControlador::Alta($email, $password);
  if(!$sql){
    echo '<script language="javascript">alert("Usuario creado con exito"),window.location.href="Backoffice.html"</script>';
  }
}

if (isset($_POST['elim'])) {
    $sql = OficinaControlador::Eliminar($email, null);
    if(!$sql){
      echo '<script language="javascript">alert("Usuario eliminado con exito"),window.location.href="Backoffice.html"</script>';
    }
}

