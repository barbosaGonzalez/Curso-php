<?php
	$conexion = mysql_connect("localhost","video2brain","video2brain");
	if(!$conexion)
	{
		die("No he podido conectar: ".mysql_error());
	}
	mysql_select_db("agenda",$conexion);
	if(mysql_query("
		INSERT INTO miagenda 
			(Nombre, Apellido, Edad, Telefono) 
		VALUES 
			('Martha', 'Lopez', 14, '540001'), 
			('Miguel', 'Sanches', 40, '000002')
		", $conexion))
		echo "Se ha insertado";
	else
		echo "No se ha podido insertar por el sigueinte error: ".mysql_error();
	//Cierro la conexion
	mysql_close();
?>