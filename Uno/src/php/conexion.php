<?php 
	$conex = new mysqli("localhost", "root", "", "z");
	if ($conex -> connect_error) {
		//echo "Error de conexión";
	} else {
		//echo "Conexión exitosa";
	}
 ?>
