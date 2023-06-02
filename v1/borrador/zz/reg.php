<?php
    /**
     * Autor: Knives
     * Date:  16/05/23
     * Conexión a la BD
     */

    $server = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "z";

    $connection = new mysqli($server, $username, $password, $dataBase);

    if ($connection -> connect_error) {
        echo "Error de conexión";
    } else {
        echo "Conexión exitosa";
    }

    $reg = "INSERT INTO `reg` (`número`, `nombre`, `apellido`, `edad`, `genero`, `telefono_fijo`, `telefono_movil`, `calle`, `numero_int`, `numero_ext`, `colonia`, `localidad`, `municipio`, `estado`, `pais`, `correo`, `password`, `numero_de_targeta`) 
            VALUES (NULL, '".$_REQUEST["name"]."', '".$_REQUEST["ape"]."', '', '', '".$_REQUEST["telefo"]."', '".$_REQUEST["tele"]."', '".$_REQUEST["calle"]."', '".$_REQUEST["numI"]."', '".$_REQUEST["numE"]."', '".$_REQUEST["col"]."', '".$_REQUEST["loc"]."', '".$_REQUEST["mun"]."', '".$_REQUEST["est"]."', '".$_REQUEST["pais"]."', '".$_REQUEST["email"]."', '".$_REQUEST["tarje"]."', '".$_REQUEST["password"]."')";
    
    if ($connection -> query($reg) == TRUE) {
        echo "Registro Exitoso";
    } else  {
        echo "Error al registrar <br>";
    }
?>