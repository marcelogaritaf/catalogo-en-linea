<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Registro</title>
    <link rel="stylesheet" href="css/loginstyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <!-- contenedor de todo -->
    <div class="contenedor-todo">
        <!-- parte de atras de los login-registros -->
        <div class="caja-atras">
            <div class="caja-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar</p>
                <button id="btn-inicio">Iniciar sesión</button>
            </div>
            <div class="caja-registro">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Registrate para iniciar sesión</p>
                <button id="btn-registro">Registrarse</button>
            </div>
        </div>
        <!-- los formularios de login y registro -->
        <div class="contenedor-login-registro">
            <!-- login -->
            <form action="reslogin.php" class="formulario-login" method="POST">
                <h2>Iniciar sesión</h2>
                <input type="text" placeholder="Correo Electronico" name="correoE">
                <select name="tipoUSUARIO" id="">
                    <option>Administrador</option>
                    <option>Usuario</option>
                </select>
                <input type="password" placeholder="Contraseña" name="Password">
                <button name="entrar">Entrar</button>
                
            </form>
            <!-- registro   -->
            <form action="registro.php" class="formulario-registro" method="POST">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Nombre de Usuario" name="nombreUsuario">
                <select name="tipoUsuario" id="">
                    <option >Usuario</option>
                    <option>Administrador</option>
                </select>
                <input type="password" placeholder="Contraseña" name="password">
                <button>Registrarse</button>
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>