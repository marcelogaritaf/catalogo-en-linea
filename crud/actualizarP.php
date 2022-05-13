<?php 
    include("../conexion.php");
    $id = $_GET['id'];
    $sql=mysqli_query($conexion, "SELECT * FROM productos WHERE Idproducto ='$id'");
    $row=mysqli_fetch_array($sql);
  
?>
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
    <title>Crud Productos</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="CrudStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
<div class="menu-display"> 
        <i class="fas fa-bars"></i>
    </div>
    <nav class="nav-main">
        <a href="../index.php"><img src="../assets/img/omenlogo.png" alt="logo de empresa" class="nav-brand"></a>
        <ul class="nav-menu">
            <li>
                <a href="../tienda/computadoras.php">Computadoras</a>
            </li>
            <li>
                <a href="../tienda/tarjetaMadre.php">Tarjetas | Procesadores</a>
                <ul class="menu-vertical">
                    <li><a href="../tienda/tarjetaGrafica.php">Tarjeta Grafica</a></li>
                    <li><a href="../tienda/tarjetaMadre.php">Tarjeta Madre</a></li>
                    <li><a href="../tienda/procesador.php">Procesador</a></li>
                </ul>
            </li>
            <li>
                <a href="../tienda/audifonos.php">Perifericos</a>
                <ul class="menu-vertical">
                    <li><a href="../tienda/mouse.php">Mouse</a></li>
                    <li><a href="../tienda/teclados.php">Teclados</a></li>
                    <li><a href="../tienda/audifonos.php">Audifonos</a></li>
                </ul>
            </li>
            <li>
                <a href="../tienda/mousepad.php">Accesorios</a>
                <ul class="menu-vertical">
                    <li><a href="../tienda/mousepad.php">Mouse Pad</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav-menu-derecha">
            <li>
                <a href="../cerrarSesion.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                
                <a href="../fpdf/reportes.php">
                <i class="fas fa-file-pdf"></i>
                </a>
            </li>
        </ul>
    </nav>
    <hr>
    <center>
        <form action="updateP.php" method="POST">
            <input type="hidden" name="Idproducto" value="<?php echo $row['Idproducto']?>"><br><br>
            <label>Nombre</label><br>
            <input type="text" name="Nombre" value="<?php echo $row['Nombre']?>"><br><br>
            <label>Descripcion</label><br>
            <input type="text" name="Descripcion" value="<?php echo $row['Descripcion']?>"><br><br>
            <label>Tipo de productos</label><br>
            <input type="text" name="TipoProducto" value="<?php echo $row['TipoProductos']?>"><br><br>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['Imagen'])?>" width="100px"><br><br>
            <input type="file" name="imagen"><br><br>
            <button>Actualizar</button>
        </form>
    </center>
</body>
</html>