<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "usuario";
    $conn = "";

    $conn = mysqli_connect($db_server,
                           $db_user,
                           $db_pass,
                           $db_name);

    if($conn)
    {
        echo"Estas conectado correctamente a la base de datos :D";
    }
    else
    {
        echo"Hubo un error en la conexion a la db >:(";
    }




?>