<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$edad = $_POST["sele"];
	$genero = $_POST["b"];
}

$reg = "INSERT INTO `reg` (`número`, `nombre`, `apellido`, `edad`, `genero`, `telefono_fijo`, `telefono_movil`, `calle`, `numero_int`, `numero_ext`, `colonia`, `localidad`, `municipio`, `estado`, `pais`, `correo`, `password`, `numero_de_targeta`) 
            VALUES (NULL, '" . $_REQUEST["name"] . "', '" . $_REQUEST["ape"] . "', '$edad', '$genero', '" . $_REQUEST["telefo"] . "', '" . $_REQUEST["tele"] . "', '" . $_REQUEST["calle"] . "', '" . $_REQUEST["numI"] . "', '" . $_REQUEST["numE"] . "', '" . $_REQUEST["col"] . "', '" . $_REQUEST["loc"] . "', '" . $_REQUEST["mun"] . "', '" . $_REQUEST["est"] . "', '" . $_REQUEST["pais"] . "', '" . $_REQUEST["email"] . "', '" . $_REQUEST["password"] . "', '".$_REQUEST['tarje']."')";


if ($conex->query($reg) == TRUE) {
	echo "
		<script type='text/javascript'>
			alert('Registrado');
			window.location.href = '../consulta.php';
		</script>  
		";
} else {
	echo "Error al registrar <br>";
}
