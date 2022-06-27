<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php";

    
    
    class Modelo {
        public $IpBaseDeDatos;
        public $NombreBaseDeDatos;
        public $UsuarioBaseDeDatos;
        public $PasswordBaseDeDatos;
        public $PuertoBaseDeDatos;
        
        public $conexion; 


        public function __construct(){
            $this -> incializarDatosDeConexion();
            $this -> conexion = new mysqli(
                $this -> IpBaseDeDatos,
                $this -> UsuarioBaseDeDatos,
                $this -> PasswordBaseDeDatos,
                $this -> NombreBaseDeDatos,
                $this -> PuertoBaseDeDatos
            );
            $this -> verificar();
            
        }

        public function verificar(){
            if($this -> conexion) 
                echo "Conectado a bdd";
        }

    
        public function incializarDatosDeConexion(){
            $this -> IpBaseDeDatos = IP_DB;
            $this -> UsuarioBaseDeDatos = USER_DB;
            $this -> PasswordBaseDeDatos = PASS_DB;
            $this -> NombreBaseDeDatos = NAME_DB;
            $this -> PuertoBaseDeDatos = PORT_DB;
        }

        
    
        
    }

       