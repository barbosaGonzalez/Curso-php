<?php session_start(); 


if(!isset($_GET['u'])){}else{$_SESSION['usuariotemporal'] = $_GET['u'];}


include "includes/variablesusuario.php";

if(isset($_GET['editando'])){
$editando = $_GET['editando'];}
else{
$editando = "no";
}

if(isset($_GET['articulo'])){
$articulo = $_GET['articulo'];}
else{
$articulo = "no";
}

if(isset($_GET['registronuevo'])){
$registronuevo = $_GET['registronuevo'];

}else{
$registronuevo = "no";
}


if(isset($_SESSION['login'])){}else{$_SESSION['login'] = "no";}

?>
<!DOCTYPE HTML>
<html>
	<head manifest="/manifiesto/manifiesto.cache">
		<title>WebLog de Jose Vicente Carratala</title>
		<meta name="description" content="WebLog de Jose Vicente Carratala" />
		<meta name="keywords" content="weblog, blog, Jose Vicente Carratala, diseño, multimedia" />
		<meta http-equiv="refresh" content="500" />
		<link rel=stylesheet href="css/estilo.css" type="text/css" />
	</head>
	<body>
		<div id="cajaheader">

		</div>
		<div id="principal" itempscope itemtype="http://www.data-vocabulary.org/Person">
			<header>
				<div id="logo">
					
				</div>
				<div id="tipo">	
				<h1><span itemprop="name"><?php echo $_SESSION['nombre']." ".$_SESSION['apellidouno'] ?></span></h1> - 
				<h2><span itemprop="title"><?php echo $_SESSION['titulo'] ?></span></h2>
				</div>
				<nav>
					<ul>
						<li><a href="index.php?registronuevo=yes"><canvaas id="iconoinicio" width="50" height="50"></canvas><br />Crea tu propio blog</a></li>
				
						
					</ul>

				<?php

				if($_SESSION['login'] == "yes"){
echo "<a href='includes/unlog.php'>Pulsa AQUI para cerrar sesion</a>";
				}

				else {echo '
<div id="login" ><form action="includes/login.php" method="post">
				<input type="text" name="usuario" value="usuario">
				<input type="text" name="contrasena" value="contrasena">
				<input type="submit"></form></div>';}
					?>
				</nav>

			</header>
			<div id="contenido">
				<section id="sobremi">
					<span itemprop="photo"><div id="mifoto" style="background:url('photo/<?php echo $_SESSION['foto'] ?>.jpg');"></div><!--<img src="photo/josevicentecarratala.jpg" width=50px height=50px />--></span>
					<h6><?php echo $_SESSION['descripcion'] ?><span itemprop="url"><br/><a href="<?php echo $_SESSION['webpersonal'] ?>"><?php echo $_SESSION['webpersonal'] ?></a></span></h6> 
				</section>
				<aside id="contacto">
<h3>Contacto</h3>
<form action="php/enviamail.php" method="post">
				<p >Introduce tu nombre</p>
				<input type="text" required name="nombre"/>
				<p >Introduce tu email</p>
				<input type="email" value="ejemplo: usuario@dominio.com" name="email"/>
				<p >Escribe tu mensaje</p>
				<textarea rows=6 name="mensaje"></textarea>
				<input type="submit" value="Enviar">
					

				</form>
				
				</aside>
				<?php if($registronuevo == "no"){} else{include "includes/registronuevo.php";}?>
				<?php 
				if($registronuevo == "no"){if($articulo == "no"){if($editando == "no"){include "includes/archivo.php";}else{}}else{}}else{}?>
				<section>
				<?php 

				if($registronuevo == "no"){if($_SESSION['login'] == "yes"){
				if($articulo == "no"){if($editando == "no"){include "includes/crearnuevopost.php";}else{}}else{}}else{}}else{} ?>
					Aqui van los post
					<?php if($registronuevo == "no"){if($articulo == "no"){if ($editando == "no"){include "includes/posts.php";}else{}}else{}}else{}?>

				<?php if($registronuevo == "no"){if($articulo == "no"){if ($editando == "yes"){include "includes/formactualizar.php";}else{}}else{}}else{}?>

				<?php if($registronuevo == "no"){if ($articulo == "yes"){include "includes/articulo.php";}else{}}else{}?>
					
				</section>
			</div>
			<footer>
				<h6>
					<div class="vcard">
						<div> <span class="name">Jose Vicente Carratala</span>-<span class="locality">Mislata</span>-<span class="region">Valencia</span>-<span class="postal-code">46920</span>-<span class="country-name">España</span></div>
						<div> <span class="tel">96 000 00 00</span>-<span class="email">info@jocarsa.com</span></div>
					</div>
				
				</h6>
				<script type="text/javascript">
					if(localStorage.pagecount){localStorage.pagecount = Number(localStorage.pagecount)+1;}else{localStorage.pagecount = 1;}
					document.write("Has visitado mi página " + localStorage.pagecount + " veces");
				</script>
				<script type="text/javascript">
					if(sessionStorage.pagecount){sessionStorage.pagecount = Number(sessionStorage.pagecount)+1;}else{sessionStorage.pagecount = 1;}
					document.write("En esta sesión, has visitado mi página :" + sessionStorage.pagecount + " veces");
				</script>
			</footer>
		</div>
	</body>
</html>

<script type="text/javascript">

	var micolor = "White";
	var miotrocolor = "Grey";
	var mitercercolor = "Black";
	var escala = 0.5;

	//Dibujo el icono Sobre Mi
	
	var c=document.getElementById("iconosobreMi");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Contacto

	var c=document.getElementById("iconocontacto");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(miotrocolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(miotrocolor);
	cxt.beginPath();
	cxt.arc(escala*50-10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*25,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50+10,escala*90,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Inicio
	
	var c=document.getElementById("iconoinicio");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(mitercercolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*30,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();
	
	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	//Dibujo el icono Noticias
	
	var c=document.getElementById("icononoticias");
	var cxt=c.getContext("2d");

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*20,0,Math.PI*2,true);
	cxt.closePath;
	cxt.fill();

	cxt.fillStyle=(micolor);
	cxt.beginPath();
	cxt.arc(escala*50,escala*50,escala*40,Math.PI,Math.PI*2,false);
	cxt.closePath;
	cxt.fill();

</script>
