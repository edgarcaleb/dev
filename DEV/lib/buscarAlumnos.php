<?php
 
include "db.php";

$buscar=$_POST['b'];


if(!empty($buscar)){
    buscar($buscar);
}
    function buscar($b){
        conectar();
        
        
        $query=mysql_query("SELECT * FROM alumnos WHERE codAlumnos LIKE '%$b%' OR  alumnos LIKE '%$b%'");
        $respuesta=mysql_num_rows($query);
        
        
        if($respuesta==0){
            echo "";
        }else{
            echo "
                <table class='table table-bordered table-modifig table-hover table-bordered'>
                <thead>
                    <th>Cod&iacute;go</th>
                    <th>Nombre</th>
                    <th>Identificaci&oacute;n</th>
                    <th>Curso</th>
                    <th>Seleccionar</th>
                </thead>";
            while($row=mysql_fetch_assoc($query)){ 
                
                $codigoAlumno=$row['codAlumnos'];
                $ident=$row['identAlumnos'];
                $alumnos=$row['alumnos'];
                $id=$row['idAlumnos'];
                
                echo "
                    
                    <tbody>
                        <tr>
                            <td>$codigoAlumno</td>
                            <td>$alumnos</td>
                            <td>$ident</td>
                            <td></td>
                            <td> <a href='#' id='alter' onclick='javascript:obtener($id)'>Seleccionar</a></td>
                        </tr>
                    </tbody>
                    </table>
                    ";
            }
        }
       
    }


	

