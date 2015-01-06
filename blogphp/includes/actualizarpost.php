<?php

$utcact = $_POST['utcact'];
$titulo = $_POST['titulopostactualizar'];
$subtitulo = $_POST['subtitulopostactualizar'];
$texto = $_POST['contenidopostactualizar'];

$conexion = sqlite_open('../database/blogs.db');

$consulta = "UPDATE posts SET titulo = '".$titulo."', subtitulo='".$subtitulo."', texto='".$texto."' WHERE utc='".$utcact."'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);


echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=../index.php"
	</head>
</html>

';

?>
