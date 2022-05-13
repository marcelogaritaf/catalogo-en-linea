<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
            alert("Debes iniciar sesión");
            </script>
        ';
        header("Location: ../login.php");
        session_destroy();
        die();
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | GRAFICA</title>
        <!-- css -->
     <link rel="stylesheet" href="paginaIntro.css">   
     <!-- link de las letras -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="cajas">
        <h1>CRUD | GRAFICA</h1>
        <div class="box">
            <img src="../assets/img/CRUD/user.png" alt="">
            <h2>CRUD para los usuarios</h2>
            <div class="text"><p>
                    Pagina para la lectura, edicion y eliminacion de los usuarios del sistema
                </p>
            </div>
            <a href="crudUsuarios.php"><button>IR</button></a>
        </div>
        <div class="box">

            <img src="../assets/img/CRUD/newproducto.jpg" alt="">

            <h2>CRUD para la edicion de los productos</h2>

            <div class="text"><p>
                    Pagina para la edicion de los productos de la pagina.
                </p>
            </div>
            <a href="crudProductos.php"><button>IR</button></a>
        </div>
        <div class="box">
            <img src="../assets/img/CRUD/graficaC.jpg" alt="">
            <h2>GRAFICA</h2>
            <div class="text"><p>
                    Pagina para realizar una investigacion de datos del sistema por medio de una grafica
                </p>
            </div>
            <a href="grafica.php"><button>IR</button></a>
        </div>
    </div>
</body>
</html>