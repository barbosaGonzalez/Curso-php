<?php
	class primerObjeto
	{
		var $variable1;
		var $variable2;
		
		function metodo1()
		{
		}
		
		function metodo2($parametro1, $parametro2)
		{
		}
	}
	
	class dimeAlgo
	{
		function dimeAlgo($algo)
		{
			echo "Lo primero que te voy a decir es esto: ".$algo;
		}
	}
	
	class dimeAlgo2
	{
		var $atributo;
		function dimeAlgo2($algo)
		{
			$this->atributo = $algo;
			echo "Lo segundo que te voy a decir es esto: ".$this->atributo;
		}
	}
	
	class saluda
	{
		function saludo()
		{
			echo "Yo te digo hola";
		}
		function adios()
		{
			echo "Yo te digo adios";
		}
	}
	
	class subsaluda extends saluda
	{
		var $atributo;
		function holados()
		{
		}
	}
	
	$decir = new dimeAlgo("Hola");
	echo "<br>";
	$decir = new dimeAlgo2("Como estas");
	echo "<br>";
	//$instancia = new saluda();
	$instancia = new subsaluda();
	$ins = $instancia->saludo();
	echo "<br>";
	$ins = $instancia->adios();
?>