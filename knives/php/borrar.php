<?php
	$conex = new mysqli("localhost", "Knives77", "faye", "z");
	$verificar = "SELECT * FROM `xd` WHERE numero = ".$_REQUEST['numero']."";
	$total = mysqli_num_rows(mysqli_query($conex, $verificar));
	 if (!$conex->connect_error) {
	 	//echo"Conexión exitosa. <br/>";
	 } else {
	 	//echo "Fallo la conexión";
	 }
	if ($total == 0) {
	    echo "
	    	<script type='text/javascript' charset='utf-8' async defer>
	    		alert('El registro no existe');
	 			window.location.href = '../delete.html';
	 		</script>
	    ";
	} else {
	    $sql = "DELETE FROM `xd` WHERE `xd`.`numero` = ".$_REQUEST["numero"]."" ;
	 	$result = mysqli_query($conex, $sql);
	 	if ($result) {
	 		//echo "Registro eliminado con exito. <br/>";
	 		echo "
	 			<script type='text/javascript' charset='utf-8' async defer>
	 				window.location.href = 'consulta.php';
	 			</script>
	 		";
	 	} else {
	 		echo "Error. <br/>";
	 	}
	}
?>



