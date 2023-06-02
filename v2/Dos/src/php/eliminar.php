<?php
	require('conexion.php');
	$verificar = "SELECT * FROM `reg` WHERE número = ".$_REQUEST['numero']."";


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
	 			window.location.href = '../eliminar.html';
	 		</script>
	    ";
	} else {
	    $sql = "DELETE FROM `reg` WHERE `reg`.`número` = ".$_REQUEST["numero"]."" ;
	 	$result = mysqli_query($conex, $sql);
	 	if ($result) {
	 		//echo "Registro eliminado con exito. <br/>";
	 		echo "
	 			<script type='text/javascript' charset='utf-8' async defer>
	 				window.location.href = '../consulta.php';
	 			</script>
	 		";
	 	} else {
	 		echo "Error. <br/>";
	 	}
	}
?>



