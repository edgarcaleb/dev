<?php
 
include "db.php";

conectar();
$query=mysql_query("SELECT * FROM profiles");
if(mysql_num_rows($query)>0){
    while($row=mysql_fetch_assoc($query)){
        $id=$row["id_perfil"];
        $name=$row["nombre_perfil"];
        $description=$row["descripcion_perfil"];
        $estado=$row["estado"];
        if($estado==1){
            $est="Activo";
        }
        else{
            $est="Descartado";
        }
        echo "
        
            <tr>
                <td><b class='color:#000'>$name</b></td>
                <td class='hidden-phone'>$description</td>
                <td> 
                    <select>
                        <option>$est</option>
                    </select>
                <td>
                  <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'><a  href='#openModal'  onclick='javascript:obtener($id)' ></a></i></button>
                  <button class='btn btn-danger btn-xs' onclick='javascript:delete_profile($id)'><i class='fa fa-trash-o '></i></button>
                </td>
            </tr>
        
        ";
    }
}


