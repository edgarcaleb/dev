<?php

/*
* 	Autor: edgar caleb muñoz fernandez.....
*	Descripcion: controlador de session... 
*	Año: 08-03-2016.....
*/

//se crea el objeto users y se apunta al metodo login, que permitira el control de acceso a usuarios.



require_once 'users.php';

$users = new acces();

$users->ctrl_session();
