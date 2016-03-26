<?php
session_start();

include_once("db.php");

$respuesta=new stdClass();

 $identificador=addslashes(htmlspecialchars($_POST['identificador']));


if($identificador=="001"){
   
    $codperfil=addslashes(htmlspecialchars($_POST['codperfil']));
    $nombrepefil=addslashes(htmlspecialchars($_POST['nombrepefil']));
    $descriperfil=addslashes(htmlspecialchars($_POST['descriperfil']));
    $estadoperfil=addslashes(htmlspecialchars($_POST['estadoperfil']));
    
    conectar();
    
    $query=mysql_query("INSERT INTO `sma_xpro2015v`.`profiles` (`id_perfil`, `cod_perfil`, `nombre_perfil`, `descripcion_perfil`, `estado`) VALUES (NULL, '$codperfil', '$nombrepefil', '$descriperfil', '$estadoperfil');");
    
    if(!$query){
        $respuesta->url="error";
    }else{
        $respuesta->url="ok";
    }
}

if($identificador=="002"){
   
    $nit=addslashes(htmlspecialchars($_POST['nit']));
    $educ=addslashes(htmlspecialchars($_POST['educ']));
    $codicfes=addslashes(htmlspecialchars($_POST['codicfes']));
    $resolucion=addslashes(htmlspecialchars($_POST['resolucion']));
    $domicilio=addslashes(htmlspecialchars($_POST['domicilio']));
    $email=addslashes(htmlspecialchars($_POST['email']));
    $patrono=addslashes(htmlspecialchars($_POST['patrono']));
    
    conectar();
    
    $query=mysql_query("INSERT INTO `sma_xpro2015v`.`institucion` (`id_institucion`,`nit_institucion`,`institucion`, `cod_icfes`, `resolucion`, `domicilio`, `email`, `patrono`) VALUES (NULL,'$nit', '$educ', '$codicfes', '$resolucion', '$domiclio', '$email','$patrono');");
    
    if(!$query){
        $respuesta->url="error";
    }else{
        $respuesta->url="ok";
    }
}


if($identificador=="999"){
    $message=addslashes(htmlspecialchars($_POST['messaje_a']));
    $fecha= date("Y-m-d");
    
    conectar();
    $query=mysql_query("INSERT INTO `sma_xpro2015v`.`message` (`id_menssage`, `menssage`,`date`) VALUES (NULL, '$message','$fecha');");
    
    if(!$query){
        $respuesta->url="error";
    }else{
        $respuesta->url="ok";
    }
}


    //para registro de grupos escolares....

if($identificador=="1"){
    $nombre_curso=addslashes(htmlspecialchars($_POST['name_curso']));
    $abre_curso=addslashes(htmlspecialchars($_POST['nomenclatura_curso']));
    $limite_curso=addslashes(htmlspecialchars($_POST['cantidad_curso']));
    
    conectar();
    $query=mysql_query("INSERT INTO `sma_xpro2015v`.`group` (`id_group`, `cod_group`, `name_group`, `abreviatura`, `limit-estud`) VALUES (NULL, '', '$nombre_curso', '$abre_curso', '$limite_curso');");
    
    if(!$query){
        $respuesta->url="error";
    }else{
        $respuesta->url="ok";
    }
}

if($identificador=="11"){
    $id=addslashes(htmlspecialchars($_POST['id_curso']));
    
    conectar();
    $query=mysql_query("DELETE FROM `sma_xpro2015v`.`group` WHERE `group`.`id_group` = '$id'");
    
    if(!$query){
        $respuesta->url="error";
    }else{
        $respuesta->url="ok";
    }
}


   
 



echo json_encode($respuesta);