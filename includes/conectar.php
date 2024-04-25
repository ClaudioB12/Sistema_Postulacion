<?php
    //En este archivo vamos a realizar la conexion a la base de datos
    include("config.php");

    //funcion para conectar a la base de datos
    function conectar(){
        $link = new mysqli(SERVER,DB_USER,DB_PASS,DB_NAME); //ESTA LINEA CONECTA A LA BASE DE DATOS
        if($link->connect_errno){
            echo "Error, no se ha podido conectar a la Base de Datos";
        }else {
            echo "Conexión exitosa";
            return $link;
        }
    }
?>