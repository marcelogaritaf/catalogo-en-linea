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
    <title>Tienda | Tarjeta Grafica</title>
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
        <hr>
      </nav>
    </div> 
    <h2 class="titleP">Tarjeta Grafica</h2>
    <div class="ImagenesTienda">
        <figure>
            <img src="../assets/img/tarjeta grafica/msigtx.jpg" alt="">
            <div class="capa">
                <h3>TARJETA GRAFICA MSI GAMING GTX</h3>
                <p>MSI Gaming GeForce GTX 1660 128-Bit HDMI/DP 6GB GDRR5 HDCP Compatible con DirectX 12 Dual Fan VR Ready OC tarjeta gráfica (GTX 1660 Gaming X 6G)</p>
            </div>
        </figure>
        <figure>   
            <img src="../assets/img/tarjeta grafica/asus.webp" alt="">
            <div class="capa">
                <h3>TARJETA GRAFICA ASUS GAMING SUPER</h3>
                <p>Asus TUF Gaming Super Overclocked - Tarjeta gráfica para juegos HDMI DP DVI edición de 4 GB
                    limentado por NVIDIA Turing con reloj Boost de 1800 MHz.
                </p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta grafica/evga.webp" alt="">
            <div class="capa">
                <h3>EVGA RTX 2060</h3>
                <p>Evga RTX 2060 Overclocked 6G GDDR6 Dual-Fan EVO Edition VR Ready HDMI DisplayPort DVI Tarjeta gráfica (DUAL-RTX2060-O6G-EVO)</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta grafica/msiRtx.jpg" alt="">
            <div class="capa">
                <h3>TARJETA GRAFICA MSI RTX 3060</h3>
                <p>MSI Gaming GeForce RTX 3060 12GB 15 Gbps GDRR6 192-Bit HDMI/DP PCIe 4 Tri-Frozr Torx Fan Ampere RGB OC Tarjeta gráfica (RTX 3060 Gaming X Trio 12G) </p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta grafica/asus2.jpg" alt="">
            <div class="capa">
                <h3>TARJETA GRAFICA ASUS GTX 1650</h3>
                <p>Tarjeta gráfica ASUS Dual NVIDIA GeForce GTX 1650 Mini OC Edition Gaming CSM (PCIe 3.0, 4 GB de memoria GDDR6, HDMI, DisplayPort, DVI-D, para Intel NUC 9. </p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/tarjeta grafica/ROGstrig.jpg" alt="">
            <div class="capa">
                <h3>TARJETA GRAFICA ROG STRIX</h3>
                <p>ASUS ROG Strix AMD Radeon RX 6600 XT OC Edition Gaming Graphics Card (AMD RDNA 2, PCIe 4.0, 8GB GDDR6, HDMI 2.1, DisplayPort 1.4a, Diseño de ventilador Axial-Tech.</p>
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