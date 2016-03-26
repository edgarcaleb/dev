
function enviar(formulario){

    
    $.ajax({
            url:"users/users.php",
            type:"POST",
            data:$("#"+formulario).serialize(),
            success:function(respuesta){
                if(respuesta==1){
                    alert("error");
                }
            }
        });
    }




