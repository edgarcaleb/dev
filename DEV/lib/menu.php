<?php
include "db.php";

$name1=$_POST["nameurl"];
$url=$_POST["url"];
$status=$_POST["statusurl"];
$ico=$_FILES['imgurl']['name'];
$ruta=$_FILES['imgurl']['tmp_name'];
$destino='../ico/'.$ico;
copy($ruta,$destino);

conectar();

$query=mysql_query("INSERT INTO `@notes`.`menu` (`idMenu`, `descripcionMenu`, `icoMenu`, `urlMenu`, `estadoMenu`) VALUES (NULL, '$name1', '$destino', '$url', '$status');");
if(!$query){
    echo "error";
}else{
 echo "ok"; 
    header("Location:../template/table.html");
}
