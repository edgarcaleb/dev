<?php

include_once("config.php");

function conectar(){
    $con=mysql_connect(HOST,USER,PASS)
        or die("ERROR EN LA CONEXION:".mysql_error());
    $db=mysql_select_db(DB,$con)
        or die("ERROR AL SELECCIONAR LA BASE DE DATOS:".mysql_error());
    
    return $con;
}  