<?php

require_once 'users/_session.php';
//crea una instancia de session a ejecutar

$se=new session();

//sirve para destruir las variables de sessiones previas

$se->init();
$se->destroy();

//redirecciona el instanciamiento de session a un nuevo usuario,

header("Location:index.php");

