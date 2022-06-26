<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php"; 

    class UsuarioControlador{
        public static function Alta($email,$password){
            $u = new UsuarioModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Insertar();
        
        }

        public static function Autenticar($email,$password){
            $u = new UsuarioModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Autenticar();
        
        }

        public static function Eliminar($email,$password){
            $u = new UsuarioModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Eliminar();
        
        }

        public static function escribir($email,$password){
        echo "bienvenido";
        }


}