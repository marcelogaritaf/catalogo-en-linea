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
    <title>Tienda | Audifonos</title>
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
    <h2 class="titleP">Audifonos</h2>
    <div class="ImagenesTienda">
        <figure>
            <img src="../assets/img/audifonos/AUDIFONO HP GAMERR.jpg" alt="">
            <div class="capa">
                <h3>AUDIFONOS HP GAMER</h3>
                <p>HP USB PC Gaming Headset with Microphone. Color del producto: Negro. 7.1 sonido envolvente, iluminación LED RGB</p>
            </div>
        </figure>
        <figure>   
            <img src="../assets/img/audifonos/Audifonos Corsair hs70.jpg" alt="">
            <div class="capa">
                <h3>AUDIFONOS CORSAIR HS70</h3>
                <p>CORSAIR HS70 Auriculares inalámbricos para juegos - 7.1 Surround Sound Auriculares para PC - Discord Certified </p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/audifonos/audifonos jbl.jpg" alt="">
            <div class="capa">
                <h3>AUDIFONOS JBL</h3>
                <p>JBL Quantum ONE - Auriculares para videojuegos con cancelación activa de ruido, color negro</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/audifonos/Audifonos Corsair.jpg" alt="">
            <div class="capa">
                <h3>AUDIFONOS CORSAIR</h3>
                <p>Auriculares prémium para juegos con sonido envolvente 7.1 – Certificados Discord – Funcionan con PC, PS5 y PS4 </p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/audifonos/Audifonos Logitech G733.jpg" alt="">
            <div class="capa">
                <h3>AUDIFONOS lOGITECH G733</h3>
                <p>Lightspeed - Auriculares inalámbricos para juegos, con diadema de suspensión, LIGHTSYNC RGB</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/audifonos/RAZER RZ04.jpg" alt="">
            <div class="capa">
                <h3>AUDIFONOS RAZER RZ04</h3>
                <p>Razer Gaming Headset: Marco de aluminio ligero – Micrófono retráctil de aislamiento de ruido </p>
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