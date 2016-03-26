<?php
include_once "./db.php";

conectar();

$query=mysql_query("SELECT * FROM departaments");
if(mysql_num_rows($query)>0){
    while($row=mysql_fetch_assoc($query)){
        $id=$row["cod_departament"];
        $name=utf8_encode($row["name_departament"]);
        
        echo "
        
            <option value='$id'>$name</option>
        
        ";
    }
}


