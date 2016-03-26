<?php
include('db.php');

$result=new stdClass();

$ms = $_POST['n'];

conectar();
    $query = mysql_query("DELETE FROM `sma_xpro2015v`.`message` WHERE `message`.`id_menssage` = $ms" );

            if(!$query){
        
                $result->url="error";
            }else{
                $result->url="ok";
            }
        echo json_encode($result);
?>