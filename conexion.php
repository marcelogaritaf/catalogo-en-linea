<?php

        $conexion = mysqli_connect('107.180.41.237','usuariolatina04','.0831') or die (mysqli_error($conexion));

        mysqli_select_db($conexion,'grupo04') or die (mysqli_error($conexion));

        mysqli_set_charset($conexion,'utf8');

        mysqli_query($conexion, "SET time_zone = '-6:00';");

       /* $conexion = mysqli_connect('localhost','root','') or die (mysqli_error($conexion));

        mysqli_select_db($conexion,'proyectopp') or die (mysqli_error($conexion));

        mysqli_set_charset($conexion,'utf8');

        mysqli_query($conexion, "SET time_zone = '-6:00';");*/
    ?>