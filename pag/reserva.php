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
    <link rel="stylesheet" href="../css/style.css">
    <!-- link css swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
    <!-- inicio header -->
    <section class="header">
        <a href="../inicio.php" class="logo">Agencia de turismo</a>
        <nav class="navbar">
            <a href="../inicio.php">Inicio</a>
            <a href="../pag/paquetes.php">Paquetes</a>
            <a href="../pag/ofertas.php">Ofertas</a>
            <a href="../pag/reserva.php">Reserva</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- fin de header -->
   <div class="home">
    <div class="slide" style="background:url(../img/mendoza.jpg)" >
        <div class="content">
            <h3>Reserva</h3>
        </div>
    </div>
   </div>
<!-- Inicio seccion reserva -->
    <section class="reserva">
        <h1 class="heading-title">Reserva tu viaje!</h1>
        <form action="../pag/reserva_form.php" method="post" class="reserva-form">
            <div class="flex">
                <div class="inputBox">
                    <span>nombre :</span>
                    <input type="text" placeholder="ingrese su nombre" name="nombre">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="ingrese su email" name="email">
                </div>
                <div class="inputBox">
                    <span>telefono :</span>
                    <input type="numero" placeholder="ingrese su numero" name="telefono">
                </div>
                <div class="inputBox">
                    <span>direccion :</span>
                    <input type="text" placeholder="ingrese su direccion" name="direccion">
                </div>
                <div class="inputBox">
                    <span>A donde :</span>
                    <input type="text" placeholder="Lugar que quieras ir" name="ubicacion">
                </div>
                <div class="inputBox">
                    <span>Cuantos :</span>
                    <input type="number" placeholder="Numero de invitados" name="invitados">
                </div>
                <div class="inputBox">
                    <span>Llegada :</span>
                    <input type="date" name="llegada">
                </div>
                <div class="inputBox">
                    <span>Partida :</span>
                    <input type="date" name="partida">
                </div>
            </div>
            <input type="submit" value="Enviar" class="btn" name="Enviar" >
        </form>
    </section>
<!-- Fin seccion reserva -->




















    <!-- inicio de footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Links rapidos</h3>
                <a href="../inicio.php"><i class="fas fa-angle-right"></i> Inicio</a>
                <a href="../pag/paquetes.php"><i class="fas fa-angle-right"></i>Paquetes</a>
                <a href="../pag/ofertas.php"><i class="fas fa-angle-right"></i>Ofertas</a>
                <a href="../pag/reserva.php"><i class="fas fa-angle-right"></i>Reserva</a>
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
<script src="../js/javascript.js"></script>
<!-- link js swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>