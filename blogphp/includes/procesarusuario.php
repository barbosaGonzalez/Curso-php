<?php

session_start();

$contador = 0;



//recibo variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellidouno = $_POST['apellidouno'];
$apellidodos = $_POST['apellidodos'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$foto = $_POST['foto'];
$webpersonal = $_POST['webpersonal'];
$email = $_POST['email'];



//compruebo si el usuario existe

$conexion = sqlite_open('../database/blogs.db');

$consulta = "SELECT * FROM usuarios";

$resultado = sqlite_query($conexion, $consulta);

while($fila = sqlite_fetch_array($resultado)){

	if($fila['usuario'] == $usuario){
		$contador++;
	}else{}

}
 sqlite_close($conexion);

//creo inserto un nuevo usuario

if($contador == 0){
	$conexion = sqlite_open('../database/blogs.db');

	$consulta = "INSERT INTO usuarios VALUES ('".$usuario."','".$contrasena."','".$nombre."','".$apellidouno."','".$apellidodos."','".$titulo."','".$descripcion."','".$foto."','".$webpersonal."','".$email."',3)";

	$ejecuto = sqlite_exec($conexion,$consulta);

	sqlite_close($conexion);

	echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';

}
else{echo'

El usuario creado ya existe
';}
?>
