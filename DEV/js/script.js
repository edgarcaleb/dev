
$(document).on("ready", function(){
    
    
    var consulta;
    
    $("#search-input").focus();
    $("#search-input").keyup(function(e){
        consulta=$("#search-input").val();
        
        $.ajax({
            type:"POST",
            url:"lib/buscarAlumnos.php",
            data:"b="+consulta,
            dataType:"html",
            beforeSend:function(){
                $("#resultadoalumno").html("<p align='center'><img src='img/default-loader.gif'/><br/>Cargando.....</p>");
            },
            error:function(){
                alert("ERROR EN LA PETICION");
            },
            success:function(respuesta){
                $("#resultadoalumno").empty();
                $("#resultadoalumno").append(respuesta);  
            }
        })
    })
    
    
    
    
    
    
   $.ajax({
    	type:"POST",
    	url:"lib/select_perfiles.php",
    	dataType:"html",
    	error:function(){
    		alert("ERROR 400...");
    	},
    	success:function(respuesta){
    		$("#show_profile").empty();
            $("#show_profile").append(respuesta);
    	}
    }); 
   
$.ajax({
    	type:"POST",
    	url:"lib/show_message.php",
    	dataType:"html",
        beforeSend:function(){
	       $("#showmessage").html("<p style='margin-left: 500px;'><img src='loadding.axd'/></p>");
	   },
    	error:function(){
    		alert("ERROR 400...");
    	},
        
    	success:function(respuesta){
            
    		$("#showmessage").empty();
            $("#showmessage").append(respuesta);
            
    	}
    });


$.ajax({
    	type:"POST",
    	url:"lib/show_notific.php",
    	dataType:"html",
    	error:function(){
    		alert("ERROR 400...");
    	},
    	success:function(respuesta){
    		$(".notific").empty();
            $(".notific").append(respuesta);
    	}
    })


$.ajax({
    	type:"POST",
    	url:"lib/depart.php",
    	dataType:"html",
    	error:function(){
    		alert("ERROR 400...");
    	},
    	success:function(respuesta){
    		$("#departamento").empty();
            $("#departamento").append(respuesta);
    	}
    })

$("#departamento").change(function(){
    var depart=$("#departamento").val();
    $.ajax({
            type:"POST",
            data:"c="+depart,
            url:"lib/country.php",
            dataType:"html",
        
            error:function(){
                alert("ERROR 400...");
            },
            success:function(respuesta){
                $("#ciudad").empty();
                $("#ciudad").append(respuesta);
            }
        })
    })

})



function b_enviar (formulario) {
		// body...
//var data=$("#creargrupo").serialize();
	//	 alert(data);
        $.ajax({
            url:"lib/insertar.php",
            type:"POST",
            dataType:"JSON",
            data:$("#"+formulario).serialize(),
            success:function(respuesta){
                if(respuesta.url=="error"){
                    alert("ERROR---- datos no procesados.....");
                }else{
                    alert("Datos Procesados con exito..");
                    document.getElementById(formulario).reset();
                }
            }
        })
	}





function delete_message(n){
    $.ajax({
        type:"POST",
        url:"lib/delete_message.php",
        dataType:"JSON",
        data:{'n':n},
        success:function(respuesta){
            if(respuesta.url=="error"){
                alert("ERROR---- datos no procesados.....");
            }else{
                alert("Datos Procesados con exito..");
            }
        }
    })
}








function delete_profile(n){
    $.ajax({
        type:"POST",
        url:"lib/delete_profile.php",
        dataType:"JSON",
        data:{'n':n},
        success:function(respuesta){
            if(respuesta.url=="error"){
                alert("ERROR---- datos no procesados.....");
            }else{
                alert("Datos Procesados con exito..");
            }
        }
    })
}








function enviar(){
     var data=$("#plectivo").serialize();
    
    $.ajax({
        url:"lib/plectivo.php",
        type:"POST",
        dataType:'JSON',
        data:data,
        success: function(respuesta){
        if(respuesta.resp == "err"){
            alert("Error al procesar los datos");
            }else{
                alert("ok");
            }
        }
    })
}






















