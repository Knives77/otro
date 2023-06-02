<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
           $consul = "SELECT * FROM `reg`";
           require("conexion.php");
           
           $resulConsul =$conex->query($consul);  
           
           $get = $_GET['id'];
           
           $consul2 = "SELECT * FROM `reg` WHERE número = $get";
           

           $resulConsul =$conex->query($consul2);
          
           if($resulConsul->num_rows>0) {
               if($fila = $resulConsul -> fetch_assoc()) {
                  $name = $fila["nombre"];
                  $apellido = $fila["apellido"];
                  $edad = $fila["edad"];
                  $genero = $fila["genero"];
                  $tel_fijo = $fila["telefono_fijo"];
                  $tel_movil = $fila["telefono_movil"];
                  $calle = $fila["calle"];
                  $numI = $fila["numero_int"];
                  $numE = $fila["numero_ext"];
                  $col = $fila["colonia"];
                  $loc = $fila["localidad"];
                  $municipio = $fila["municipio"];
                  $estado = $fila["estado"];
                  $pais = $fila["pais"];
                  $correo = $fila["correo"];
                  $password = $fila["password"];
                  $tarjeta = $fila["numero_de_targeta"];

                  echo "<tr>
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
            <br>
            <?php
            echo "

<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8' />
    <title>Registro</title>
  </head>

  <body>
    <div id='cont'>
      <h1>Cambios de registro número  '$get'</h1> <input type='hidden' name='nm' value='$get' >
      <hr />
      <form method='POST' onsubmit='return funx()' action='altas.php'>
        <label>Campo obligatorio </label><label class='ob'>*</label><br /><br />
        <label>Nombre(s) : </label>
        <label class='ob'>*</label>
        <input id='nnn' type='text' value='$name' required name='name' />
        <label>Apellidos : </label>
        <label class='ob'>*</label>
        <input id='ape' type='text' value='$apellido' required name='ape' />
        <br /><br />
        <label>Edad : </label>
        <select name='sele' id='sele'>
           <option value=$edad selected='true' >'$edad'</option>
        </select>
        <br />
        <br />
        <label>Genero : </label>
        <br />
        <br />
        <label>Hombre</label>
        <input type='radio' name='b' value='Hombre' required />
        <label>Mujer</label>
        <input type='radio' name='b' value='Mujer' required />
        <label>Mayonesa</label>
        <input type='radio' name='b' value='Mayonesa' required />
        <script>    
          document.getElementsByName('b').forEach(element => {
            if (element.value == '$genero') {
                element.setAttribute('checked', true);
            }
          });
        </script>
        <br />
        <br />
        <label>Número telefono fijo</label>
        <label class='ob'>*</label>
        <input
          id='telefo'
          type='number'
          value='$tel_fijo'
          required
          name='telefo'
        />
        <label>Número telefono</label>
        <label class='ob'>*</label>
        <input
          type='number'
          id='tele'
          value='$tel_movil'
          required
          name='tele'
        />
        <hr />
        <h2>Dirección</h2>
        <label>Calle :    </label>
        <label class='ob'>*</label>
        <input type='text' value='$calle' required name='calle' />
        <label>Número INT : </label>
        <label class='ob'>*</label>
        <input type='number' value='$numI' required name='numI' />
        <label>Número EXT : </label>
        <label class='ob'>*</label>
        <input type='number' value='$numE' required name='numE' />
        <br /><br />
        <label>Colonia : </label>
        <label class='ob'>*</label>
        <input type='text' value='$col' required name='col' />
        <label>Localidad :     </label>
        <label class='ob'>*</label>
        <input type='text' value='$loc' required name='loc' />
        <label></label>
        <label>Municipio :    </label>
        <label class='ob'>*</label>
        <input type='text' value='$municipio' required name='mun' />
        <br />
        <br />
        <label>Estado :  </label>
        <label class='ob'>*</label>
        <input type='text' value='$estado' required name='est' />
        <label>Pais :             </label>
        <label class='ob'>*</label>
        <input type='text' value='$pais' required name='pais' />
        <br />
        <hr />
        <label>Correo :                 </label>
        <label class='ob'>*</label>
        <input
          id='cor'
          type='email'
          value='$correo'
          required
          name='email'
        />
        <br /><br />
        <label>Contraseña : </label>
        <label class='ob'>*</label>
        <input
          id='contraseña'
          minlength='8'
          value='12345Aa$'
          type= '$password'
          required
          name='password'
        />
        <label>Numero de tarjeta : </label>
        <label class='ob'>*</label>
        <input
          id='tarje'
          type='number'
          value='$tarjeta'
          required
          name='tarje'
        />
        <hr />
        <input type='submit' value='Registrar' />
      </form>
    </div>
    <script src='js/script.js'></script>
  </body>
</html>
";
    ?>
    </div>
  </body>
</html>
