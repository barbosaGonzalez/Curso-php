<?php

session_start();



$usuarioenviado = $_POST['usuario'];
$contrasenaenviada = $_POST['contrasena'];

$conexion = sqlite_open('../database/blogs.db');

$peticion = "SELECT * FROM usuarios WHERE usuario = '".$usuarioenviado."';";

$ejecuto = sqlite_query($conexion,$peticion);

while($fila = sqlite_fetch_array($ejecuto)){

if($usuarioenviado = $fila['usuario'] & $contrasenaenviada = $fila['contrasena']){

$_SESSION['login'] = "yes";
$_SESSION['usuariotemporal'] = $fila['usuario'];

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';
	
} else{
$_SESSION['login'] = "no";

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';
}


}
echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';
?>
