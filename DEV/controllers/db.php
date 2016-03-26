<?php
/*
* 	Autor: edgar caleb muñoz fernandez.....
*	Descripcion: conexion db... 
*	Año: 08-03-2016.....
*/
require_once 'config.inc';

class db extends PDO {
    public function __construct() {
    	try{
    		return parent::__construct("mysql: host=". DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
         //Abre una nueva conexión al servidor de MySQL

        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (Exception $e) {
			echo "ERROR EN LA CONEXION CON LA BASE DE DATOS...";
			die();
		}
    }
}