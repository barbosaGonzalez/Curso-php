<?php
	$archivo="text.txt";
	$contenido="Este es otro contenido";
	//$manejador = fopen($archivo, 'a+'); //escribir al final
	$manejador = fopen($archivo, 'w+'); //sobreescribir
	fwrite ($manejador, $contenido);
?>