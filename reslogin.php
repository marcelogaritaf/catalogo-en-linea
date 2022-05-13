<?php
    session_start();
    //conexion 
    include 'conexion.php';

    //variables
    $correo = $_POST['correoE'];
    $tipoUsuario = $_POST['tipoUSUARIO'];
    $password = $_POST['Password'];
    $password = hash('sha512', $password);

    //validacion del login
    $validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo ='$correo' and TipoUsuario='$tipoUsuario' and Password = '$password'");

    //validacion con sentencia
    if(mysqli_num_rows($validar) > 0){
        if ($tipoUsuario == 'Administrador'){
            $_SESSION['usuario'] = $correo;
            if(isset($_COOKIE[$correo])){
                $cont = $_COOKIE[$correo];
                setcookie($correo, $cont + 1, time() + 3600);
            }else{
                setcookie($correo, 1, time() + 3600);
            }
            header("Location: index.php");
            exit();
        }
        if ($tipoUsuario == 'Usuario'){
            $_SESSION['usuario'] = $correo;
            if(isset($_COOKIE[$correo])){
                $cont = $_COOKIE[$correo];
                setcookie($correo, $cont + 1, time() + 3600);
            }else{
                setcookie($correo, 1, time() + 3600);
            }
            header("Location: indexU.php");
            exit();
        } 
    }else{
        echo'
            <script>
                alert("Usuario no existe");
                window.location = "login.php";
            </script>
        ';
        exit();
    }

?>