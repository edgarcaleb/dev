<?php


function jqxlogin_in(){
$mensaje="";

$errors=isset($_GET["error"]) ? $_GET["error"]:null;
if ($errors==1) {
		$mensaje= "Usuario o Password No Valido... ! Por Favor Verificar...";
	}elseif ($errors==2) {
		$mensaje="Definir Credenciales...";
	}

/*@session_start();
echo "<pre>";
print_r($_SESSION);
*/

$html=<<<HTML
<!DOCTYPE html>
<html> 
	
<head>
	<title>SIGAPLUS</title>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style-l.css" rel='stylesheet' type='text/css' />
    <link href="css/jxqstyle.css" rel='stylesheet' type='text/css' />
    <link href="css/load.css" rel='stylesheet' type='text/css' />
	
    
    <script type="text/javascript" src="js/scripts/jquery-1.10.2.min.js"></script>

    <!--<script type="text/javascript" src="js/wi/script.js"></script>-->
       
</head>
     


<body>
    <!--<div class="bar"></div>-->

    <div class="login-form">
		<div class="head">
	   </div>
        <form id="login_in" name="login_in" action="users/init.php" method="post">
            <div class="form-group">
                <span>Usuario.</span>
                 <input type="text" class="text" placeholder="Usuario" id="usermane" name="user">
                <span>Clave de acceso</span>
			   <input type="password" placeholder="Password" id="pwd" name="pwd">
            </div>
			<div>
				<button type="submit" id="jxqenviar">Iniciar Sesi&oacute;n</button>
			</div><br>
            <div class="notific">
                <div class="alert alert-danger">$mensaje</div>
            </div>
		</form>
    </div>

</body>
</html>


HTML;

echo $html;
}
