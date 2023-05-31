<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Consulta</title>
</head>
    <body>
        <div>
            <table border=1%>
                <tr>
                    <th class="aa" style="background-color: black; color: white;">Número</th>
                    <th class="aa" style="background-color: black; color: white;">Nombre</th>
                    <th class="aa" style="background-color: black; color: white;">Apellido</th>
                    <th class="aa" style="background-color: black; color: white;">Edad</th>
                    <th class="aa" style="background-color: black; color: white;">Genero</th>
                    <th class="aa" style="background-color: black; color: white;">Teléfono fiho</th>
                    <th class="aa" style="background-color: black; color: white;">Teléfono Móvil</th>
                    <th class="aa" style="background-color: black; color: white;">Calle</th>
                    <th class="aa" style="background-color: black; color: white;">Número INT</th>
                    <th class="aa" style="background-color: black; color: white;">Número EXT</th>
                    <th class="aa" style="background-color: black; color: white;">Colonia</th>
                    <th class="aa" style="background-color: black; color: white;">Localidad</th>
                    <th class="aa" style="background-color: black; color: white;">Municipio</th>
                    <th class="aa" style="background-color: black; color: white;">Estado</th>
                    <th class="aa" style="background-color: black; color: white;">Pais</th>
                    <th class="aa" style="background-color: black; color: white;">Correo</th>
                    <th class="aa" style="background-color: black; color: white;">Constraseña</th>
                    <th class="aa" style="background-color: black; color: white;">Número de tarjeta</th>
                </tr>
                <?php
                    /*
                        Autor: Knives
                        Date:  
                        Conexión a la BD
                    */

                    $consul = "SELECT * FROM `reg`";
                    require("php/conexion.php");
                    //4.Ejecutar la consulta 
                    $resulConsul =$conex->query($consul);

                    //5.Mostrar el contenido de la tabla 
                    //num_rows permite ver si hay filas o registros 
                    if($resulConsul->num_rows>0) {
                        echo"<h2>El contenido de la tabla es:</h2>";
                        while($fila = $resulConsul -> fetch_assoc()) {
                            echo"<tr>
                            <td class='tdd' style='color: red; font-style: italic; width: 5%; text-align: center;'>".$fila["número"]."</td>
                            <td>".$fila["nombre"]."</td>
                            <td>".$fila["apellido"]."</td>
                            <td>".$fila["edad"]."</td>
                            <td>".$fila["genero"]."</td>
                            <td>".$fila["telefono_fijo"]."</td>
                            <td>".$fila["telefono_movil"]."</td>
                            <td>".$fila["calle"]."</td>
                            <td>".$fila["numero_int"]."</td>
                            <td>".$fila["numero_ext"]."</td>
                            <td>".$fila["colonia"]."</td>
                            <td>".$fila["localidad"]."</td>
                            <td>".$fila["municipio"]."</td>
                            <td>".$fila["estado"]."</td>
                            <td>".$fila["pais"]."</td>
                            <td>".$fila["correo"]."</td>
                            <td>".$fila["password"]."</td>
                            <td>".$fila["numero_de_targeta"]."</td>
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
