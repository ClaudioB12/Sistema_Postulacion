<?php
    //Definimos constantes de nuestro sistema
    if(!defined("TITULO_GENERAL")) define("TITULO_GENERAL","Sistema de Bolsa Laboral Ver. 1.0");


    //ahora creamos las constantes para conectarnos a la base datos
    if(!defined("SERVER")) define("SERVER","localhost");
    if(!defined("DB_NAME")) define("DB_NAME","bd_ofertas");
    if(!defined("DB_USER")) define("DB_USER","root");
    if(!defined("DB_PASS")) define("DB_PASS","");


    //creamos una constante que apunta a la dirección url de nuestro sistema
    if(!defined("RUTA_GENERAL")) define("RUTA_GENERAL","http://localhost/ofertas/");
?>