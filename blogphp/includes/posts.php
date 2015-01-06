
<?php

$conexion = sqlite_open('database/blogs.db');

$peticion = "SELECT * FROM posts WHERE usuario='".$_SESSION['usuariotemporal']."' ORDER BY utc DESC LIMIT 3;";

$ejecucion = sqlite_query($conexion,$peticion);

while ( $fila = sqlite_fetch_array($ejecucion)){

echo "
<article>
						<div id='logov2b' style='background:url(\"photo/".$fila['imagen'].".jpg\");'></div>
						<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
						<h3>".$fila['titulo']."</h3>
						<h4>".$fila['subtitulo']."</h4>
						<p>".$fila['texto']."</p>
						<br/>

						";
						if($_SESSION['login'] == "yes"){
						echo"<a href='includes/eliminarpost.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}

						
						if($_SESSION['login'] == "yes"){
						echo"<a href='index.php?titulomod=".$fila['titulo']."&subtitulomod=".$fila['subtitulo']."&textomod=".$fila['texto']."&editando=yes&utc=".$fila['utc']."'>Modificar</a>";echo"<br/>";}else{}

						//echo"ols";
					echo"</article>";


}

sqlite_close($conexion);

?>

