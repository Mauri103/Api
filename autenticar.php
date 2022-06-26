<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php";

    $email = $_POST['email'];
    $password = $_POST['password'];


    echo $email . " " . $password;

    UsuarioControlador::Eliminar($email, $password);