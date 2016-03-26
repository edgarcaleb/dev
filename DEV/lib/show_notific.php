<?php
require_once ("db.php");

conectar();

$query=mysql_query("SELECT * FROM `notes`");

if(!$query){
    
    echo" <td><td colspan='5'>ERROR DE CONEXION... 404</td></tr>";
}else{
    $respuesta=mysql_num_rows($query);

if($respuesta==0){
    echo "<h1>Bandeja de entrada vacia....</h1>";
}else{
    while($row=mysql_fetch_assoc($query)){
        $id_notas=$row['id_notes'];
        $notas=$row['notes'];
        
        echo "
        
            <blockquote>$notas</blockquote>

        ";
    }
  }
}
