<?php 
	//$conex = new mysqli("localhost", "root", "", "z");
	$conex = new mysqli("localhost", "Knives77", "faye", "z");

	if ($conex -> connect_error) {
		//echo "Error de conexión";
	} else {
		//echo "Conexión exitosa";
	}
 ?>
