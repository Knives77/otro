<?php 
	$conex = new mysqli("localhost", "Knives77", "faye", "z");

    //3- Comprobar conexión
    if ($conex -> connect_error) {
        //echo "Error de conexión";
    } else {
        //echo "Conexión exitosa";
    }
    $id = $_REQUEST['nm'];

	$update = "UPDATE `xd` SET `nombre` = '".$_REQUEST['name']."', `email` = '".$_REQUEST['email']."', `password` = '".$_REQUEST['password']."' WHERE `xd`.`numero` = '$id'";
	$resulConsul = mysqli_query($conex, $update);

	if ($resulConsul) {
        echo "
          <script>
          	alert('Cambios Realizados Con Exito.');
          	window.location.href='../cambio.php';
          </script>";
    } else  {
        echo "Error al registrar <br>";
    }
 ?>
