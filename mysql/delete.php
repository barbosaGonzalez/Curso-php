<?php
	$conexion = mysql_connect("localhost","video2brain","video2brain");
	if(!$conexion)
	{
		die("No he podido conectar: ".mysql_error());
	}
	mysql_select_db("agenda",$conexion);
	if(mysql_query("DELETE FROM miagenda WHERE personaID='4'", $conexion))
		echo "Se ha borrado";
	else
		echo "No se ha podido borrar por el sigueinte error: ".mysql_error();
	//Cierro la conexion
	mysql_close();
?>