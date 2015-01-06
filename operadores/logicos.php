<?php
	$uno = 1;
	$dos = 2;
	echo "El resultado es: ".($uno == 1 && $dos == 2)."<br>";
	echo "El resultado es: ".($uno == 1 && $dos == 3)."<br>";
	$tres = 3;
	$cuatro = 4;
	echo "El resultado es: ".($tres == 3 || $cuatro == 4)."<br>";
	echo "El resultado es: ".($tres == 2 || $cuatro == 4)."<br>";
	echo "El resultado es: ".($tres == 2 || $cuatro == 3)."<br>";
	$cinco = 5;
	$seis = 6;
	echo "El resultado es: ".($cinco == $seis)."<br>";
	echo "El resultado es: ".($cinco != $seis)."<br>";
?>