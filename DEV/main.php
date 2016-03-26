<?php

@session_start();


if (!empty($_SESSION['idPerfil'])) {
    require_once("template/main.php");

	main();
    
	
}else{
	
    header("Location:index.php");
}


