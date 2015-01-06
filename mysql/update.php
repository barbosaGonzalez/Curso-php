<?php
	$conexion = mysql_connect("localhost","video2brain","video2brain");
	if(!$conexion)
	{
		die("No he podido conectar: ".mysql_error());
	}
	mysql_select_db("agenda",$conexion);
	if(mysql_query("UPDATE miagenda SET Edad = 24 
						WHERE Nombre = 'Martha' AND 
						Apellido = 'Lopez'", $conexion))
		echo "Se ha actualizado";
	else
		echo "No se ha podido actualizar por el sigueinte error: ".mysql_error();
	//Cierro la conexion
	mysql_close();
?>