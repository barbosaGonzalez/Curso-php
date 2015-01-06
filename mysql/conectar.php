<?php
	$conexion = mysql_connect("localhost","video2brain","video2brain");
	if(!$conexion)
	{
		die("No he podido conectar: ".mysql_error());
	}
	
	if(mysql_query("CREATE DATABASE agenda", $conexion))
		echo "Se ha creado la base de datos";
	else
		echo "No se ha podido crear la base de datos por el sigueinte error: ".mysql_error();
	echo "<br>";
	//Preparo esta peticion
	mysql_select_db("agenda",$conexion);
	$sql = "CREATE TABLE miagenda
			(
				personaID int NOT NULL AUTO_INCREMENT,
				PRIMARY KEY(personaID),
				Nombre varchar(15),
				Apellido varchar(15),
				Edad int,
				Telefono int
			)";
	//Ejecuto la peticion
	if(mysql_query($sql, $conexion))
		echo "Se ha creado la tabla";
	else
		echo "No se ha podido crear la tabla por el sigueinte error: ".mysql_error();
	mysql_close($conexion);
?>