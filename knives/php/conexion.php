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
    $connection = new mysqli($server, $username, $password, $dataBase);

    //3- Comprobar conexión
    if ($connection -> connect_error) {
        //echo "Error de conexión";
    } else {
        //echo "Conexión exitosa";
    }
    
    //Realizar registro
    //$reg = "INSERT INTO `xd` (`numero`, `nombre`, `email`, `password`) VALUES (NULL, 'Knives', 'knives@knives@gmail.com', 'añaña')";

    $reg = "INSERT INTO `xd` (`numero`, `nombre`, `email`, `password`) VALUES (NULL, '".$_REQUEST["name"]."', '".$_REQUEST["email"]."', '".$_REQUEST["password"]."')";
    
    //Comprobar si se registró

    if ($connection -> query($reg) == TRUE) {
        echo "
                  <script>
                  alert('REGISTRO EXITOSO');
                  window.location.href='./consulta.php';
                  </script>";
    } else  {
        echo "Error al registrar <br>";
    }
?>
