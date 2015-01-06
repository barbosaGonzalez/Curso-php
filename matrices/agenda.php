<?php
	$agenda[0]['nombre'] = "Luis";
	$agenda[0]['telefono'] = 93141342;
	$agenda[0]['email'] = "torby@outlook.com";
	
	$agenda[1]['nombre'] = "Miguel";
	$agenda[1]['telefono'] = 569349394;
	$agenda[1]['email'] = "miguel@outlook.com";
	
	$agenda[2]['nombre'] = "Marta";
	$agenda[2]['telefono'] = 121422433;
	$agenda[2]['email'] = "marta@outlook.com";
	
	//echo $agenda [0]['nombre'];
	//echo $agenda [1]['nombre'];
	echo $agenda [2]['nombre'];
	function dameagenda()
	{
		global $agenda;
		for($indice=0;$indice<=2;$indice++)
		{
			echo "
				<table border=1 width=300px>
					<tr>
						<td>
							Nombre:
						</td>
						<td>
							".$agenda[$indice]['nombre']."
						</td>
					</tr>
					<tr>
						<td>
							Telefono:
						</td>
						<td>
							".$agenda[$indice]['telefono']."
						</td>
					</tr>
					<tr>
						<td>
							Correo:
						</td>
						<td>
							".$agenda[$indice]['email']."
						</td>
					</tr>
				</table><br>";
		}
	}
	echo dameagenda();
?>