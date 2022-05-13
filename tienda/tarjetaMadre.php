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
    <title>Tienda | Tarjeta Madre</title>
    <!-- link de iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/tienda.css">
    <!-- scrollreveal -->
    <script src="../libreriasJava/scrollreveal.js"></script>
    <!-- link de las letras -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu-display">
        <i class="fas fa-bars"></i>
    </div>
    <div class="container">
    <nav class="nav-main">
        <a href="../indexU.php"><img src="../assets/img/omenlogo.png" alt="logo de empresa" class="nav-brand"></a>
        <ul class="nav-menu">
            <li>
                <a href="computadoras.php">Computadoras</a>
            </li>
            <li>
                <a href="tarjetaMadre.php">Tarjetas | Procesadores</a>
                <ul class="menu-vertical">
                    <li><a href="tarjetaGrafica.php">Tarjeta Grafica</a></li>
                    <li><a href="tarjetaMadre.php">Tarjeta Madre</a></li>
                    <li><a href="procesador.php">Procesador</a></li>
                </ul>
            </li>
            <li>
                <a href="audifonos.php">Perifericos</a>
                <ul class="menu-vertical">
                    <li><a href="mouse.php">Mouse</a></li>
                    <li><a href="teclados.php">Teclados</a></li>
                    <li><a href="audifonos.php">Audifonos</a></li>
                </ul>
            </li>
            <li>
                <a href="mousepad.php">Accesorios</a>
                <ul class="menu-vertical">
                    <li><a href="mousepad.php">Mouse Pad</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav-menu-derecha">
            <li>
                <a href="../cerrarSesion.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
      </nav>
      <hr>
    </div> 
    <h2 class="titleP">Tarjeta Madre</h2>
    <div class="ImagenesTienda">
        <figure>
            <img src="../assets/img/tarjeta madre/TargetaASUSprime.jpg" alt="">
            <div class="capa">
                <h3>TARJETA MADRE ASUS PRIME Z590</h3>
                <p>LGA 1200 (Intel11ª/10ª generación) ATX (14+2 DrMOS Power Stages, 3X M.2, Intel 2.5 Gb LAN, USB 3.2 panel frontal tipo C, Thunderbolt 4, Aura Sync RGB Lighting)</p>
            </div>
        </figure>
        <figure>   
            <img src="../assets/img/tarjeta madre/ASUS ATX.jpg" alt="">
            <div class="capa">
                <h3>TARJETA MADRE ASUS ATX ROG STRIX</h3>
                <p> ASUS ROG Strix B550-F Gaming (WiFi 6) AMD AM4 Zen 3 Ryzen 5000 y 3ª generación Ryzen ATX placa base para juegos (PCIe 4.0, 2.5Gb LAN, BIOS Flashback, HDMI 2.1</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta madre/MSIB460M.jpg" alt="">
            <div class="capa">
                <h3>TARJETA MADRE MSI B460M</h3>
                <p>MSI B460M PRO-VDH WiFi ProSeries - Placa base (mATX, 10ª generación Intel Core, LGA 1200 Socket, DDR4, Dual M.2 Slots, USB 3.2 Gen 1, 2.5G</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta madre/TargetaAsusRog.jpg" alt="">
            <div class="capa">
                <h3>TARJETA MADRE ASUS ROG MAXIMUS </h3>
                <p> ROG Maximus XIII Hero (WiFi 6E) Z590 LGA 1200 (Intel11ª/10ª generación) ATX Gaming Motherboard (PCIe 4.0, 14+2 Power Stages, DDR4 5333+, Dual 2.5Gb LAN.</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta madre/TargetaAsusTUF.jpg" alt="">
            <div class="capa">
                <h3>TARJETA MADRE ASUS TUF GAMING</h3>
                <p>ASUS TUF Gaming X570-PRO (WiFi 6) AM4 Zen 3 Ryzen 5000 y 3ª generación Ryzen ATX placa base (PCIe 4.0, 2.5Gb LAN, BIOS Flashback, HDMI 2.1, USB 3.2 Gen 2</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta madre/TargetaGygabyte.jpg" alt="">
            <div class="capa">
                <h3>TARJETA MADRE GIGABYTE B450M</h3>
                <p> GIGABYTE B450 AORUS M (AMD Ryzen AM4/Micro ATX/M.2 Thermal Guard/HDMI/DVI/USB 3.1 Gen 2/DDR4/Motherboard)</p>
            </div>
        </figure> 
    </div>
    <!-- redes sociales -->
    <section class="social">
        <p>Redes Sociales</p>
        <div class="links">
            <a href="https://www.facebook.com/OMENP-105921798616101">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/MarceloGarita3">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/mgfra_s/">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
      </section>
  </div>

  <!-- footer -->
  <div class="footer-links">
    <div class="content-footer">
        <ul>
            <li>
                <a href="computadoras.php">
                    <h3>Computadoras</h3>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="tarjetaMadre.php">
                    <h3>Tarjetas | Procesadores</h3>
                </a>
            </li>
            <li>
                <a href="tarjetaGrafica.php">Tarjeta Grafica</a>
            </li>
            <li>
                <a href="tarjetaMadre.php">Tarjeta Madre</a>
            </li>
            <li>
                <a href="procesador.php">Procesadores</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="audifonos.php">
                    <h3>Perifericos</h3>
                </a>
            </li>
            <li>
                <a href="mouse.php">Mouse</a>
            </li>
            <li>
                <a href="teclados.php">Teclados</a>
            </li>
            <li>
                <a href="audifonos.php">Audifonos</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="mousepad.php">
                    <h3>Accesorios</h3>
                </a>
            </li>
            <li>
                <a href="mousepad.php">Mousepad</a>
            </li>
        </ul>
    </div>
  </div>
  </div>
  <footer class="footer">
      <h3>Derechos Reservados</h3>
  </footer>
  <script src="../js/main.js"></script>
</body>
</html>