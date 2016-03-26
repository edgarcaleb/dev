<?php

function main(){
$persona=$_SESSION["usuario"]; 
$html=<<<HTML
    
<html>
    <head>
        <title></title>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" type="text/css" href="css/message/chat.css">

    
        <script type="text/javascript" src="js/jquery.js"></script>

        <script type="text/javascript" src="js/script.js"></script>

        <script type="text/javascript" src="js/boostrap/bootstrap.min.js"></script>




 
<head>
    
<body>
    
<div id="topbar">
	<div id="topbar-content" class=" span12">
		<ul id="leftside" class="menu pull-left menu-opt">
			<li class="icons ">
				<a href="main.php" id="home-position" class="topbar-icon"></a>
			</li>
			<li class="icons ">
				<a href="#" id="regis-position" class="topbar-icon">
					<p class="count">10</p>
				</a>
			</li>
			<li class="icons" id="nav"><a href="#" id="opt-position" class="topbar-icon"></a>
				<ul>
					<li class="icons" style="border: none;">
						<a href="main.php?ows/configure_app/05555pxboxone7/app5" style="line-height: 3;" >
						<span id="config-position" class="topbar-icon b"></span>Configuraci&oacute;nes</a>
					</li>
					<li class="icons">
						<a herf="" style="line-height: 3;" >
						<span id="parant-position" class="topbar-icon b"></span>Parametros</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="/home#/library"></a>
			</li>
        </ul>

        <div id="facet-search" class="pull-left">
        	<div class="facet-container">
	        	<div class="facet-input">
			        <input id="search-input" type="text" name="query" value="" placeholder="Buscar alumnos y docentes" autocomplete="off">
			    </div>
			</div>
                            
		</div>
                            
        <div id="resultadoalumno">                   
        </div>
                            
		<ul class="rigth-opt" id="rightside">
            <li class="close_true">
				<a href="logout.php">Cerrar Sesi&oacute;n</a>
			</li>
			<li class="icons  alert_once">
				<a href="#" id="notifications-position" class="topbar-icon">
					<p class="count">10</p>
				</a>
				<!-- opcion de notas -->
			</li>
			
		</ul>
	</div>
</div>

<style>
.cont-view{
    width:1160px;
}
#content{
   
    margin: 12px auto;
    display: block;
    margin-left: 18%;
}

.avatar-container {
    padding: 15px;
    overflow: hidden;
}
.section {
    background-color: #fff;
    border: 1px solid;
    border-color: #dae1e8 #d3dde5 #b6c8d8;
    box-shadow: 0 1px 0 0 rgba(56,61,72,.09);
    margin-bottom: 14px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
}

.left-column.section {
    float: left;
    margin-top: 0;
}
.span3 {
    width: 220px;
}
.avatar-tip-holder {
    clear: both;
    padding-top: 1em;
    display: block;
}
.btn, .btn:visited, .e-tour .introjs-button, a.btn, a.btn:visited {
    border-radius: 3px;
    padding: 6px 18px;
    display: inline-block;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    outline: none;
    font-family: Helvetica,helvetica,arial,sans-serif;
    font-weight: 400;
    font-size: 13px;
    color: #2077cf;
    border: 1px solid #c3c9d1;
    background-color: #fff;
    -webkit-transition: opacity .2s ease-in-out,background .2s ease-in-out,color .2s ease-in-out,background .2s ease-in-out,border .2s ease-in-out,-webkit-box-shadow .2s ease-in-out;
    transition: opacity .2s ease-in-out,background .2s ease-in-out,color .2s ease-in-out,background .2s ease-in-out,border .2s ease-in-out,box-shadow .2s ease-in-out;
}
.avatar-tip {
    color: #fff;
    background: #757f93;
    display: block;
    padding: 5px 17px;
    text-shadow: 0 0;
}
.avatar-container>div {
    margin: 2px 0 0 15px;
    max-width: 122px; 
    width: 100%;
}
.main-colum{
    margin-left: 10px;
    width: 564px;
    float: left;
}
._btn{
    border:solid 1px transparent;
}
</style>

<!-- menu principal -->
<div class="cont-view">
    <div id="content">
        <div class="left-column section span3">
            <div class="avatar-container section">
                <div class="">edgadd</div>
                <span class="avatar-tip-holder">
                    <a href="javascript:;" class="btn avatar-tip">
                        Cargar mi avatar / foto...!                
                    </a>
                </span>
            </div>
            <div class="section span3 fl">fg</div>
        </div>
    </div>
    <div class="main-colum">
        <div class="section container-fluid">
            <div class="col-sm-12 top">
                <form>
                    <div class="form-group">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <select class="form-control"></select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary2 _btn">Enviar</button>
                        <button class="btn btn-default _btn">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
</body>
                                        
</html>
    
HTML;
    
    echo $html;

}


?>






<!-- fin box doby -->

