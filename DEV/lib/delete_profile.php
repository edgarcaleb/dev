<?php
include('db.php');

$result=new stdClass();

$pro = $_POST['n'];

conectar();
    $query = mysql_query("DELETE FROM `sma_xpro2015v`.`profiles` WHERE `profiles`.`id_perfil` = $pro" );

            if(!$query){
        
                $result->url="error";
            }else{
                $result->url="ok";
            }
        echo json_encode($result);
?>