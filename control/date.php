<?php
	echo "Numero del dia con 2 digitos: ".date("d");
	echo "<br>";
	echo "Numero del dia con 1 digito: ".date("j");
	echo "<br>";
	echo "Primeras 3 letras del dia de la semana: ".date("D");
	echo "<br>";
	echo "Dia de la semana completo: ".date("l");
	echo "<br>";
	echo "Cantidad de dias desde el inicio de la semana: ".date("N");
	echo "<br>";
	echo "Cantidad de dias desde el inicio de la semana: ".date("w");
	echo "<br>";
	echo "Cantida de dias desde el inicio del a�o: ".date("z");
	echo "<br>";
	echo "Cantida de semanas desde el inicio del a�o: ".date("W");
	echo "<br>";
	echo "Numero del mes con 2 digitos: ".date("m");
	echo "<br>";
	echo "Numero del mes con 1 digito: ".date("n");
	echo "<br>";
	echo "Nombre del mes completo: ".date("F");
	echo "<br>";
	echo "Primeras 3 letras del nombre del mes: ".date("M");
	echo "<br>";
	echo "Numeros del dia en el mes actual: ".date("t");
	echo "<br>";
	echo "A�o completo 4 digitos: ".date("Y");
	echo "<br>";
	echo "A�o completo 2 ultimos digitos: ".date("y");
	echo "<br>";
	echo "Si es a�o biciesto: ".date("L");
	echo "<br>";
	echo "Fecha en formato ISO 90006001: ".date("c");
	echo "<br>";
	echo "Cantidad de segundos desde la hora UNIX: ".date("U");
	echo "<br>";
	echo "Si estamos en am o pm: ".date("a");
	echo "<br>";
	echo "Si estamos en AM o PM: ".date("A");
	echo "<br>";
	echo "Hora en swatch internet timer: ".date("B");
	echo "<br>";
	echo "Numero de hora en formato 12hrs con 1 digito: ".date("g");
	echo "<br>";
	echo "Numero de hora en formato 24hrs con 1 digito: ".date("g");
	echo "<br>";
	echo "Numero de hora en formato 12hrs con 2 digito: ".date("h");
	echo "<br>";
	echo "Numero de hora en formato 24hrs con 2 digito: ".date("H");
	echo "<br>";
	echo "Minutos con ceros: ".date("i");
	echo "<br>";
	echo "Segundos con ceros: ".date("s");
	echo "<br>";
	echo "Milisegundos con ceros: ".date("u");
	echo "<br>";
	echo "Zona horaria: ".date("e");
	echo "<br>";
	echo "Si estamos en horario reducido de sol: ".date("I");
	echo "<br>";
	echo "Diferencia con el Grenwich mediam time: ".date("O");
	echo "<br>";
	echo "Hoy es ".date("l")." ".date("j")." de ".date("F")." del ".date("Y")."<br>";
	function dametiempo()
	{
		switch(date("l"))
		{
			case "Monday";
				$dia = "Lunes";
				break;
			case "Tuesday";
				$dia = "Martes";
				break;
			case "Wednesday";
				$dia = "Miercoles";
				break;
			case "Thursday";
				$dia = "Lunes";
				break;
			case "Friday";
				$dia = "Viernes";
				break;
			case "Saturday";
				$dia = "Sabado";
				break;
			case "Sunday";
				$dia = "Domingo";
				break;
		}
		switch(date("n"))
		{
			case 1;
				$mes="Enero";
				break;
			case 2;
				$mes="Enero";
				break;
			case 3;
				$mes="Enero";
				break;
			case 4;
				$mes="Enero";
				break;
			case 5;
				$mes="Enero";
				break;
			case 6;
				$mes="Enero";
				break;
			case 7;
				$mes="Enero";
				break;
			case 8;
				$mes="Enero";
				break;
			case 9;
				$mes="Enero";
				break;
			case 10;
				$mes="Octubre";
				break;
			case 11;
				$mes="Noviembre";
				break;
			case 12;
				$mes="Diciembre";
				break;
		}
		echo "Hoy es ".$dia." ".date("j")." de ".$mes." del ".date("Y");
	}
	dametiempo();
?>