<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/nueva/utils/autoload.php";


    class UsuarioModelo extends Modelo{
        
        public $Email;
        public $Password;

        public function __construct($id=""){
            parent::__construct();
            if($id !== "") {
                $this -> Id = $id;
                $this -> Obtener();
            }
        }

      
        public function insertar(){
            
            $sql = "INSERT INTO usuario (email,password) VALUES (
                '" . $this -> Email . "',
                '" . password_hash($this -> Password,PASSWORD_DEFAULT) . "'
            )";
            $this -> conexion -> query($sql);

            echo $sql;

            
        }

        public function Autenticar(){
            $sql = "SELECT password FROM usuario WHERE email = '" . $this -> Email . "'";
            $resultado = $this -> conexion -> query($sql);
            

            if($resultado -> num_rows == 0)
                echo "Usuario no existe";
            else {
                $fila = $resultado -> fetch_all(MYSQLI_ASSOC)[0]; 
                $passwordHasheado = $fila['password'];
                     
                if(password_verify($this -> Password, $passwordHasheado)){
                    echo "Contraseña Correcta";
                }

            }
        }

        public function Eliminar(){
            $sql = "DELETE FROM usuario WHERE email ='" . $this -> Email . "'";
            $this -> conexion -> query($sql);
        }



        public function ObtenerTodos(){
            
            $sql = "SELECT * FROM usuario";
            $filas = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $elementos = [];
            foreach($filas as $fila){
                $u = new UsuarioControlador();
                $u -> Email = $fila['email'];
                $u -> Password = $fila['password'];
                array_push($elementos, $u);
            }

            echo('<pre>');
            var_dump($elementos);
            echo('</pre>');
           
        }

    }