<?php

 

    spl_autoload_register(function ($clase){
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/nueva/modelos/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/nueva/modelos/$clase.class.php";

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/nueva/controladores/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/nueva/controladores/$clase.class.php";
        }
        
    });

    require_once $_SERVER['DOCUMENT_ROOT'] . "/nueva/config.php";
    
    //if(!conexion){
      //  session_start();
    //*/
   
