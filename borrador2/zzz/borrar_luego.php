<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Bajas</title>
		<link rel="stylesheet" href="" />
		<script>
			function conf() {
				const mensaje = "pene";
				return confirm(mensaje);
			}
		</script>
	</head>
	<body>
		<form action="php/borrar.php">
			<h1>Bajas :</h1>
			<label>Número : </label>
			<input type="text" name="numero" required />
			<input type="submit" name="submit" onclick="return confirm();"/>
		</form>
	</body>
</html>





