<?php
include_once "./db.php";
 
$b=$_POST['c'];
   conectar();
    $query=mysql_query("SELECT * FROM countrys WHERE cod_departament='$b'");
if(mysql_num_rows($query)>0){
    while($row=mysql_fetch_assoc($query)){
        $id=$row["cod_country"];
        $name=utf8_encode($row["name_country"]);
        
        echo "
        
            <option value='$id'>$name</option>
        
        ";
    }
}