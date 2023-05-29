<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabla.css">
    <title>Consulta</title>
</head>
    <body>
        <div>
            <table border=1%>
                <tr>
                    <th class="aa" style="background-color: black; color: white;">Número</th>
                    <th class="aa" style="background-color: black; color: white;">Nombre</th>
                    <th class="aa" style="background-color: black; color: white;">Correo</th>
                    <th class="aa" style="background-color: black; color: white;">Contraseña</th>
                </tr>
                <?php
                    /*
                        Autor: Knives
                        Date:  16/05/23
                        Conexión a la BD
                    */

                    //1- Declaración de variables
                    $server = "localhost";
                    $username = "Knives77";
                    $password = "faye";
                    $dataBase = "z";

                    //2- Realizar conexión
                    $conex = new mysqli($server, $username, $password, $dataBase);

                    //3- Comprobar conexión
                    if ($conex -> connect_error) {
                        //echo "Error de conexión";
                    } else {
                        //echo "Conexión exitosa";
                    }
                    //3. Realizar el query de consulta
                    //traer tda la tabla 
                    $consul = "SELECT * FROM `xd`";

                    //4.Ejecutar la consulta 
                    $resulConsul =$conex->query($consul);

                    //5.Mostrar el contenido de la tabla 
                    //num_rows perinte ver si hay filas o registros 
                    if($resulConsul->num_rows>0) {
                        echo"<h2>El contenido de la tabla es:</h2>";
                        while($fila = $resulConsul -> fetch_assoc()) {
                            echo"<tr>
                            <td class='tdd' style='color: red; font-style: italic; width: 5%; text-align: center;'>".$fila["numero"]."</td>
                            <td>".$fila["nombre"]."</td>
                            <td>".$fila["email"]."</td>
                            <td>".$fila["password"]."</td>
                            </tr>";
                        }
                    } else {
                        echo "<h3>No se encontraron Registros</h3>";
                    }
            ?>
            </table>
        </div>
    </body>
</html>
