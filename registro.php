<?php
    /**inclusion de la parte de conexion */
    include 'conexion.php';

    /**variables */
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $tipoUsuario = $_POST['tipoUsuario'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);/** encriptacion de la contraseña */

    /**mensaje a la base de datos */
    $query = "INSERT INTO usuarios(Nombre, Correo, NombreUsuario, TipoUsuario, Password) 
              VALUES('$nombre','$correo','$nombreUsuario','$tipoUsuario','$password') ";

    /*no repeticion de datos*/
    $ver_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo ='$correo' ");
    if(mysqli_num_rows($ver_correo) > 0 ){
        echo '<script>
                alert("Este correo ya esta registrado");
                window.location = "login.php";
              </script>
        ';
        exit();
    }

    /** no repeticion de nombre de usuario */
    $ver_nombreUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE NombreUsuario='$nombreUsuario'");
    if(mysqli_num_rows($ver_nombreUsuario) > 0 ){
        echo '<script>
                alert("Este usuario ya esta registrado");
                window.location = "login.php";
              </script>
        ';
        exit();
    }

    /**confirmacion del mensaje en la base de datos  */
    $resultado = mysqli_query($conexion ,$query);

    if($resultado){
        if($tipoUsuario == 'Administrador'){
            header("Location: index.php");
        }
        if($tipoUsuario == 'Usuario'){
            header("Location: indexU.php");
        }    
    }else{
        echo'Intente de nuevo';
        header("Location: login.php");
    }
    mysqli_close($conexion);
?>