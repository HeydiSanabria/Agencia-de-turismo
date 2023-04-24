<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de turismo</title>
    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- link css swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
    <!-- inicio header -->
    <section class="header">
        <a href="index.php" class="logo">Agencia de turismo</a>
        <nav class="navbar">
            <a href="index.php">Inicio</a>
            <a href="./pag/paquetes.php">Paquetes</a>
            <a href="./pag/ofertas.php">Ofertas</a>
            <a href="./pag/reserva.php">Reserva</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- fin de header -->

    <!-- Inicia seccion inicio -->
    <section class="home">
        <div class="home-slider">
            <div class="W">
                <div class="slide" style="background:url(./img/bariloche.jpg) no-repeat">
                    <div class="content">
                        <span>Explora, Descubre, Viaja</span>
                        <h3>Explora el mundo con nosotros</h3>
                        <a href="./pag/paquetes.php" class="btn">Descubre mas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin seccion inicio -->
    <!-- Inicio seccion de servicios -->
    <section class="services">
        <h2 class="heading-title">Nuestros servicios</h2>
        <div class="box-container">
            <div class="box">
                <img src="./img/avion.png" alt="">
                <h3>Paquetes aereos</h3>
            </div>
            <div class="box">
                <img src="./img/autobu.png" alt="">
                <h3>Paquetes en bus</h3>
            </div>
        </div>
    </section>
    <!-- Fin de seccion de servicios -->
    <!-- inicio sobre inicio -->
    <section class="home-about">
        <div class="image">
            <img src="./img/machupichu.avif" alt="">
        </div>
        <div class="content">
            <h3>Sobre nosotros</h3>
            <p>¡Descubre el mundo con nuestra agencia de turismo! Te ofrecemos experiencias inolvidables y destinos fascinantes en todo el mundo. Sumérgete en nuevas culturas, disfruta de paisajes impresionantes y crea recuerdos inolvidables con tus seres queridos. Nuestro equipo de expertos en viajes te guiará en cada paso del camino para asegurarnos de que disfrutes de la mejor experiencia de viaje posible. ¡Ven y únete a nosotros en esta emocionante aventura de descubrimiento!</p>
        </div>
    </section>
    <!-- Fin sobre inicio -->

    <!-- Inicio home seccion paquetes  -->
    <section class="home-paquetes">
        <h1 class="heading-title">Nuestros paquetes</h1>
        <div class="box-container">
            
            <div class="box">
                <div class="image">
                    <img src="./img/lima.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lima</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, dolorum.</p>
                    <a href="./pag/reserva.php" class="btn" >Reserva</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./img/lima.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lima</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, dolorum.</p>
                    <a href="./pag/reserva.php" class="btn" >Reserva</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./img/lima.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lima</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, dolorum.</p>
                    <a href="./pag/reserva.php" class="btn" >Reserva</a>
                </div>
            </div>
        </div>
        <div class="ver-mas">
            <a href="./pag/paquetes.php" class="btn" >Ver mas</a>
        </div>
    </section>
    <!-- Fin home seccion paquetes  -->
    <!-- Inicio home seccion ofertas -->
    <section class="home-ofertas">
        <div class="content">
            <h3>Hasta 50%</h3>
            <p>Aprovecha esta oportunidad para realizar el viaje de tus sueños</p>
            <a href="./pag/reserva.php" class="btn"> Reserva</a>
        </div>
    </section>
    <!-- Fin home seccion ofertas -->

    <!-- inicio de footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Links rapidos</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i> Inicio</a>
                <a href="./pag/paquetes.php"><i class="fas fa-angle-right"></i>Paquetes</a>
                <a href="./pag/ofertas.php"><i class="fas fa-angle-right"></i>Ofertas</a>
                <a href="./pag/reserva.php"><i class="fas fa-angle-right"></i>Reserva</a>
            </div>
            <div class="box">
                <h3>Links extras</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Preguntas y repuestas</a>
                <a href="#"><i class="fas fa-angle-right"></i> Politicas de privacidad</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terminos y condiciones</a>
            </div>
            <div class="box">
                <h3>Información de contacto</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i>aturismo@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Medrano 888</a>
            </div>
            <div class="box">
                <h3>Siguenos</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>
        <div class="credit">Creado por <span>Heydi Sanabria</span>|Todos los derechos reservados!</div>
    </section>

    <!-- fin de footer -->

    <!-- link js -->
    <script src="./js/javascript.js"></script>
    <!-- link js swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>