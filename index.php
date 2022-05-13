<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
            alert("Debes iniciar sesión");
            </script>
        ';
        header("Location: login.php");
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
    <title>Pagina Principal | Administrador</title>
    <!-- link de iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- scrollreveal -->
    <script src="libreriasJava/scrollreveal.js"></script>
    <!-- link de las letras -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <p>hola <b> <?php echo $_SESSION['usuario'];?></b> ha ingresado <b><?php ?></b></p>
    <div class="menu-display"> 
        <i class="fas fa-bars"></i>
    </div>
  <div class="container">
      <nav class="nav-main">
        <a href="indexU.html"><img src="assets/img/omenlogo.png" alt="logo de empresa" class="nav-brand"></a> 
        <ul class="nav-menu">
            <li>
                <a href="tienda/computadoras.php">Computadoras</a>
            </li>
            <li>
                <a href="tienda/tarjetaMadre.php">Tarjetas | Procesadores</a>
                <ul class="menu-vertical">
                    <li><a href="tienda/tarjetaGrafica.php">Tarjeta Grafica</a></li>
                    <li><a href="tienda/tarjetaMadre.php">Tarjeta Madre</a></li>
                    <li><a href="tienda/procesador.php">Procesador</a></li>
                </ul>
            </li>
            <li>
                <a href="tienda/audifonos.php">Perifericos</a>
                <ul class="menu-vertical">
                    <li><a href="tienda/mouse.php">Mouse</a></li>
                    <li><a href="tienda/teclados.php">Teclados</a></li>
                    <li><a href="tienda/audifonos.php">Audifonos</a></li>
                </ul>
            </li>
            <li>
                <a href="tienda/mousepad.php">Accesorios</a>
                <ul class="menu-vertical">
                    <li><a href="tienda/mousepad.php">Mouse Pad</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav-menu-derecha">
            <li>
                <a href="cerrarSesion.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <a href="crud/paginaIntro.php">
                    <i class="fas fa-user-edit"></i>
                </a>
            </li>
        </ul>
      </nav>
      <hr>

      <!-- pagina principal -->
      <header class="principal">
          <h2>Bienvenidos</h2>
          <p>Bienvenidos al catalogo OMEN, donde encuentras lo mas actual del mundo informatico y gaming. 
              <br> Desde computadoras, partes y accesorios somos
              lo mejor en el mercado y el mejor en tu decesión.
        </p>
      </header>

      <!-- nuevas cartas -->
      <div class="new-cartas">  
          <div>
              <img src="assets/img/computadoras/mac1.jpg" alt="foto">
            <div class="capa">
                <h3>COMPUTADORA MACBOOK PRO</h3>
                <p>Apple MacBook Pro 2021 (16 pulgadas, chip Apple M1 Pro con CPU de 10 núcleos y GPU de 16 núcleos, 16
                    GB de RAM, 512 GB SSD), color Space Gray.</p>
            </div>
          </div>
          <div>
            <img src="assets/img/tarjeta grafica/asus.webp" alt="foto">
            <div class="capa">
                <h3>TARJETA GRAFICA ASUS GAMING SUPER</h3>
                <p>Asus TUF Gaming Super Overclocked - Tarjeta gráfica para juegos HDMI DP DVI edición de 4 GB
                    limentado por NVIDIA Turing con reloj Boost de 1800 MHz.
                </p>
            </div>
        </div>
        <div>
            <img src="assets/img/procesador/Intel Pentium.jpg" alt="foto">
            <div class="capa">
                <h3>PROCESADOR INTEL PENTIUM</h3>
                <p>ntel Pentium Gold G-6400 - Procesador de sobremesa (2 núcleos 4,0 GHz LGA1200 (chipset Intel serie 400)</p>
            </div>
        </div>
        <div>
            <img src="assets/img/audifonos/Audifonos Corsair.jpg" alt="foto">
            <div class="capa">
                <h3>AUDIFONOS CORSAIR</h3>
                <p>Auriculares prémium para juegos con sonido envolvente 7.1 – Certificados Discord – Funcionan con PC, PS5 y PS4 </p>
            </div>
        </div>
      </div>
      <!-- banner -->
      <section class="banner">
          <div class="content">
            <h2>Sobre Nosotros</h2>
            <p>OMEN desde 1990, es una empresa consolidada en Costa Rica, cuyo enfoque es el desarrollo y la
            comercialización de tecnologías de la información y comunicación.
            A su vez, importa y distribuye equipo cómputo y componentes informáticos.
            En la actualidad es uno de los líderes del comercio, proveedores e integradores de soluciones
            con
            alta tecnología en hardware y software respaldados por las diferentes marcas fabricantes.
            </p>
          </div>
      </section>
      <!-- segunda parte de cartas -->
      <div class="new-cartas">
        <div>
            <img src="assets/img/mouse/mouse corsair.jpg" alt="foto">
            <div class="capa">
                <h3>MOUSE CORSAIR</h3>
                <p>Corsair Harpoon PRO - Ratón para juegos RGB - Diseño ligero - Sensor óptico de 12.000 DPI, con cable Pro</p>
            </div>
        </div>
        <div>
          <img src="assets/img/mousepad/mousepad razer.jpg" alt="foto">
          <div class="capa">
            <h3>MOUSEPAD RAZER R702</h3>
                <p>Razer Firefly Hard V2 RGB Gaming Mouse Pad: Customizable Chroma Lighting, Built-in Cable Management</p>
        </div>
      </div>
      <div>
          <img src="assets/img/tarjeta madre/TargetaASUSprime.jpg" alt="foto">
          <div class="capa">
            <h3>TARJETA MADRE ASUS PRIME Z590</h3>
                <p>LGA 1200 (Intel11ª/10ª generación) ATX (14+2 DrMOS Power Stages, 3X M.2, Intel 2.5 Gb LAN, USB 3.2 panel frontal tipo C, Thunderbolt 4, Aura Sync RGB Lighting)</p>
        </div>
      </div>
      <div>
          <img src="assets/img/teclados/teclado trust ziva gaming.jpg" alt="foto">
          <div class="capa">
            <h3>TECLADO TRUST ZIVA GAMING</h3>
            <p>Combo de teclado y mouse para juegos, K1 LED Rainbow retroiluminado teclado con 104 teclas para computadora PC y computadora portátil</p>
        </div>
      </div>
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
                <a href="tienda/computadoras.php">
                    <h3>Computadoras</h3>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="tienda/tarjetaMadre.php">
                    <h3>Tarjetas | Procesadores</h3>
                </a>
            </li>
            <li>
                <a href="tienda/tarjetaGrafica.php">Tarjeta Grafica</a>
            </li>
            <li>
                <a href="tienda/tarjetaMadre.php">Tarjeta Madre</a>
            </li>
            <li>
                <a href="tienda/procesador.php">Procesadores</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="tienda/audifonos.php">
                    <h3>Perifericos</h3>
                </a>
            </li>
            <li>
                <a href="tienda/mouse.php">Mouse</a>
            </li>
            <li>
                <a href="tienda/teclados.php">Teclados</a>
            </li>
            <li>
                <a href="tienda/audifonos.php">Audifonos</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="tienda/mousepad.php">
                    <h3>Accesorios</h3>
                </a>
            </li>
            <li>
                <a href="tienda/mousepad.php">Mousepad</a>
            </li>
        </ul>
    </div>
  </div>
  <footer class="footer">
      <h3>Derechos Reservados</h3>
  </footer>
   <!-- link a java -->
  <script src="js/main.js"></script>
</body>
</html>