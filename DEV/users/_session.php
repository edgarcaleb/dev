<?php

/*
* 	Autor: edgar caleb muñoz fernandez.....
*	Descripcion: Estructura de las variables session... 
*	Año: 08-03-2016.....
*/
class session
{
	
	function __construct(){}

	public function init()
	{
		@session_start(); //inicializacion de la variable session...
	}
	public function destroy() //destruccion de las variables de session...
	{
		session_unset();
		session_destroy();
	}
	public function set($var, $val) 
	/* 	captura de las variables de session mediante dos parametos que son el:...
	* 	var=>el nombre de la varible,
	*	val=>el valor de la variable session....
	*/
	{
		$_SESSION[$var]=$val;
	}
}