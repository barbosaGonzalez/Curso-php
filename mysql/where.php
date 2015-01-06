<?php
	//Realizamos la conexion
	$conexion = mysql_connect("localhost","video2brain","video2brain");
	//Estructura de control por si falla
	if(!$conexion)
	{
		die("No he podido conectar: ".mysql_error());
	}
	//Seleccionamos la base de datos
	mysql_select_db("agenda",$conexion);
	//Realizo la peticion
	$peticion = mysql_query("SELECT * FROM miagenda 
								WHERE Nombre='Edsel'");
	//Listo los elementos de la base de datos
	while ($fila=mysql_fetch_array($peticion))
	{
		echo $fila['Nombre']." ".$fila['Apellido'].", "
		.$fila['Edad'].", ".$fila['Telefono'].". <br>";
	}
	//Cierro la conexion
	mysql_close();
?>