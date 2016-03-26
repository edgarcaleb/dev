<?php
require_once ("db.php");

conectar();

$query=mysql_query("SELECT * FROM `message`,`icons`");


if(!$query){
    
    echo" <td><td colspan='5'>ERROR DE CONEXION... 404</td></tr>";
}else{
    $respuesta=mysql_num_rows($query);

if($respuesta==0){
    echo "<h1>Bienvenido ......</h1>";
}else{
    while($row=mysql_fetch_assoc($query)){
        $id=$row['id_menssage'];
        $mensaje=$row['menssage'];
        $fecha=$row['date'];
        $img=$row['imagen'];
        
        echo "
        
            <div class='messages'>
                <div class='box1'>
                <a href='#' title='Close' class='close' onclick='javascript:delete_message($id)'>X</a>
                    <div class='message-pic1'>	
                        <img src='$img'  width='40' height='40'>
                            <p>$fecha</p>
                    </div>
                    <div class='message-pic1-info'>
                        <p>$mensaje</p>
                    </div>
                    <div class='clearfix'></div>
                </div>
            </div>

        ";
    }
  }
}

