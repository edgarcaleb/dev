$(document).on("ready",function(){
    menu_u();
})

$(document).change(function(){
     $selectd=$("#selectmenu").val();

if($selectd=="2"){
        menu_p();
    }
if($selectd=="1"){
        menu_u();
    }
}) 

function menu_u(){
    $.post("template/include/home/menu_users.php", function(data){
        $("#ressultado").html(data);
        });
}

function menu_p(){
    $.post("template/include/home/menu_p.php", function(data){
        $("#ressultado").html(data);
        });
}