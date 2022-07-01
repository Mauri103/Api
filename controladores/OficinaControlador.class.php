<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php"; 

    class OficinaControlador{
        
        public static function Alta($email,$password){
            $u = new OficinaModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Insertar();
        
        }

        public static function Eliminar($email,$password){
            $u = new OficinaModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Eliminar();
        
        }

        public static function ObtenerTodos(){
            $u = new OficinaModelo();
            $u -> ObtenerTodos();
        
        }

        public static function Autenticar($email,$password){
            $u = new OficinaModelo();
            $u -> Email = $email;
            $u -> Password = $password;
            $u -> Autenticar();
        
        }
        
    }
