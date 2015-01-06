<aside id="posts">
				<h5>Posts previos</h5>
					<ul>

					<?php
						$conexion = sqlite_open('database/blogs.db');

						$peticion = "SELECT * FROM posts WHERE usuario='".$_SESSION['usuariotemporal']."' ORDER BY utc DESC LIMIT 20 OFFSET 3";

						$ejecucion = sqlite_query($conexion,$peticion);

						while($fila = sqlite_fetch_array($ejecucion)){
         echo"<li><a href='index.php?articulo=yes&utc=".$fila['utc']."'><time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>-".$fila['titulo']."</a></li>";

						}
sqlite_close($conexion);
					?>
						
						
						
					</ul>
				</aside>
