<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/stylesss.css" />
    <title>Formulario</title>
  </head>
  <body>
    <h1>Ingreso al sistema.</h1>
    <hr />
    <h2>Cambiando :</h2>
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

                    //2- Realizar conexión
                    $conex = new mysqli("localhost", "root", "", "z");

                    //3- Comprobar conexión
                    if ($conex -> connect_error) {
                        //echo "Error de conexión";
                    } else {
                        //echo "Conexión exitosa";
                    }
                    //3. Realizar el query de consulta
                    $get = $_GET['id'];
                    //echo $get;
                    $consul = "SELECT * FROM `xd`";
                    $consul2 = "SELECT * FROM `xd` WHERE numero = $get";

                    //4.Ejecutar la consulta 
                    $resulConsul =$conex->query($consul2);

                    //5.Mostrar el contenido de la tabla 
                    //num_rows perinte ver si hay filas o registros 
                    if($resulConsul->num_rows>0) {
                        if($fila = $resulConsul -> fetch_assoc()) {
                            $name  = $fila["nombre"];
                            $email = $fila["email"];
                            $pass  = $fila["password"];
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
            <br>
            <?php
            echo "
    <script type='text/javascript' charset='utf-8'>
      function cc() {
        return window.confirm(`¿Cambiar los datos de la fila '$get'?`);
      }
    </script>
    <div id='form'>
      <form action='update.php'>
        <label name='number'>Número   : '$get'  </label> <br /> <br />
        <input type='hidden' name='nm' value='$get' >
        <label>Nombre    :   </label>
        <input type='text' id='nam' name='name' value='$name'/><br />
        <label>Email         :   </label>
        <input type='email' id='eml' name='email' value='$email'/><br />
        <label>Password   :   </label>
        <input type='password' id='pass' name='password' value='$pass'/><br />
        <input type='submit' value='Ingresar' onclick='return cc();'/>
      </form>
      ";
    ?>
    </div>
    <div id="form2">
      <img src="../img/raven.jpg" alt="pn" id="papa">
    </div>
  </body>
</html>
