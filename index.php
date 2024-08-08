<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayPulse</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="icon" href="./iconos/Iconos png/LOGO.png">
</head>
<body>

    <!-- HEADER-->
    <header>
        <nav>
            <div class="logo">
                <img src="./iconos/Iconos png/LOGO.png" alt="Logo">
            </div>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Juegos</a></li>
                <li><a href="#">Destacados</a></li>
                <li><a href="#">Torneos disponibles</a></li>
                <li><a href="#">...</a></li>
            </ul>
            <div class="auth-buttons">
                <input type="text" placeholder="Buscar...">
                <button class="inicio" onclick="redirectToAnotherPage()"> Iniciar Sesión</button>
                <button class="registrarse" onclick="redirectToAnotherPageRegistrarse()">Registrarse</button>
            </div>
        </nav>
    </header>

       <!-- APARTADO DEL VIDEO -->
    <main>
        <div class="hero">

            <video autoplay muted loop id="background-video">
                <source src="Video/background-video.mp4" type="video/mp4">
            </video>

            <div class="overlay"></div>
            <div class="content">
                <h1><span class="pro">PRO</span><span class="players">PLAYERS</span></h1>
                <p class="competitivo">El pulso del juego competitivo</p>
                <p class="frase__larga">Sube de nivel tu juego, gana premios reales y forma parte de una comunidad de más de 30 millones de jugadores competitivos.</p>
                <button>Compite Ahora</button>
            </div>
        </div>

         <!-- Sección de Destacados -->
        <section class="featured">
            <h2>Destacados</h2>
            <div class="featured-items">
                <div class="featured-item">
                    <a href="#" class="boton__lol">
                    <img src="Imagenes Destacada/lolNoticia.png" alt="League of Legends">
                    </a>
                    <a href="#" class="boton__lol"><h3>LEAGUE OF LEGENDS</h3></a>
                    <p>CELEBRA EL ORGULLO 2024: LOL Y TFT</p>
                </div>

                <div class="featured-item">
                    <a href="#" class="boton__valorant">
                    <img src="Imagenes Destacada/valorantNoticia.png" alt="Valorant">
                    </a>
                    <a href="#" class="boton__valorant"><h3>VALORANT</h3></a>
                    <p>SHOWCASE DE LOS AGENTES DE VALORANT</p>
                </div>
            </div>
    </section>
     <!-- Sección de Juegos Disponibles -->
     
    <section class="available-games">
        <h2>Juegos Disponibles</h2>
        <div class="see-more">
            <a href="#">Ver más</a>
        </div>
        <div class="games-list">
            <div class="game-item">
                <a href="#" class="boton__valorant">
                <img src="Imagenes Destacada/Valorant.png" alt="Valorant">
            </a>
                <a href="#" class="boton__valorant"><p>VALORANT</p></a>
            </div>

            <div class="game-item">
                <a href="#" class="boton__lol">
                <img src="Imagenes Destacada/LoL.png" alt="League of Legends">
                </a>
                <a href="#" class="boton__lol"><p>LEAGUE OF LEGENDS</p></a>
            </div>

            <div class="game-item">
                <a href="#" class="boton__fornite">
                <img src="Imagenes Destacada/Fortnite.png" alt="Fortnite">
                </a>
                <a href="#" class="boton__fornite"><p>FORTNITE</p></a>
            </div>

            <div class="game-item">
                <a href="#" class="boton__Counter__Strike">
                <img src="Imagenes Destacada/CounterStrike2.png" alt="Counter Strike 2">
                </a>
                <a href="#" class="boton__Counter__Strike"><p>COUNTER STRIKE 2</p></a>
            </div>

            <div class="game-item">
                <a href="#" class="boton__obverwath">
                <img src="Imagenes Destacada/Overwatch2.png" alt="Overwatch 2">
                </a>
                <a href="#" class="boton__obverwath"><p> OVERWATCH 2 </p></a>
            </div>
        </div>
    </section>


            <!-- Sección de Torneos Populares -->
            
            <section class="torneos-populares">
                <h3>Torneos Populares</h3>
                <div class="mostrar-mas">
                    <a href="#">Mostrar más</a>
                </div>
                <div class="torneos-grid">

                    <!--Torneo Valorant-->
                    <div class="torneo-item">
                        <div class="icono__valorant">
                            <a href="#"><img src="iconos/icons8-valorando-48.png" alt="valorant">
                            </a>
                        </div>
                        <div class="boton__torneo__valorant">
                        <a href="#" class="boton__torneo">
                        <img src="Imagenes Destacada/Img. Torneos/TORNEO VALORANT.png" alt="Torneo Valorant">
                        </a>
                    </div>
                        <div class="torneo-info">
                            <p>Dia y Hora del evento</p>
                            <a href="#">
                            <p><span class="boton__organizadores__torneo"><img src="iconos/Iconos png/usuario.png" alt=""></span> Nombre Del Torneo</p>
                            </a>
                            <p class="info__torneo__valorant">Global · 1v1 · $7.00 · 30 Espacios</p>
                        </div>
                    </div>
                    

                    <!-- Torneo Rainbow Six Siege -->
                    <div class="torneo-item">
                        <div class="icono__R6">
                            <a href="#"><img src="/iconos/logoR6.png" alt="Rainbow Six Siege">
                            </a>
                        </div>
                        <div class="boton__torneo__R6">
                        <a href="#" class="boton__torneo">
                        <img src="Imagenes Destacada/Img. Torneos/TORNEO R6.png" alt="Torneo Rainbow Six Siege">
                        </a>
                    </div>
                        <div class="torneo-info">
                            <p>Dia y Hora del evento</p>
                            <a href="#">
                            <p><span class="boton__organizadores__torneo"><img src="iconos/Iconos png/usuario.png" alt=""></span> Nombre Del Torneo</p>
                            </a>
                            <p class="info__torneo__R6">Global · 1v1 · $7.00 · 30 Espacios</p>
                        </div>
                    </div>

                    <!-- Torneo Overwatch 2 -->
                    <div class="torneo-item">
                        <div class="icono__overwath">
                            <a href="#"><img src="/iconos/logoOW.png" alt="Overwatch 2">
                            </a>
                        </div>
                        <div class="boton__torneo__overwatch">
                        <a href="#" class="boton__torneo">
                        <img src="Imagenes Destacada/Img. Torneos/TORNEO OW2.png" alt="Torneo Overwatch 2">
                        </a>
                    </div>
                        <div class="torneo-info">
                            <p>Dia y Hora del evento</p>
                            <a href="#">
                            <p><span class="boton__organizadores__torneo"><img src="iconos/Iconos png/usuario.png" alt=""></span> Nombre Del Torneo</p>
                            </a>
                            <p class="info__torneo__overwatch">Global · 1v1 · $7.00 · 30 Espacios</p>
                        </div>
                    </div>

                    <!-- Torneo League of Legends -->
                    <div class="torneo-item">
                        <div class="icono__LOL">
                            <a href="#"><img src="/iconos/LOL.png" alt="League of Legends">
                            </a>
                        </div>
                        <div class="boton__torneo__LOL">
                        <a href="#" class="boton__torneo">
                        <img src="Imagenes Destacada/Img. Torneos/TORNEO LOL.png" alt="Torneo League of Legends">
                        </a>
                    </div>
                        <div class="torneo-info">
                            <p>Dia y Hora del evento</p>
                            <a href="#">
                            <p><span class="boton__organizadores__torneo"><img src="iconos/Iconos png/usuario.png" alt=""></span> Nombre Del Torneo</p>
                            </a>
                            <p class="info__torneo__LOL">Global · 1v1 · $7.00 · 30 Espacios</p>
                        </div>
                    </div>

                    <!-- Torneo CS:GO -->
                    <div class="torneo-item">
                        <div class="icono__CS_GO">
                            <a href="#"><img src="/iconos/logoCS.png" alt="CS:GO">
                            </a>
                        </div>
                        <div class="boton__torneo__CS_GO">
                        <a href="#" class="boton__torneo">
                        <img src="Imagenes Destacada/Img. Torneos/TORNEO CSGO.png" alt="Torneo CS:GO">
                        </a>
                    </div>
                        <div class="torneo-info">
                            <p>Dia y Hora del evento</p>
                            <a href="#">
                            <p><span class="boton__organizadores__torneo"><img src="iconos/Iconos png/usuario.png" alt=""></span> Nombre Del Torneo</p>
                            </a>
                            <p class="info__torneo__CS_GO">Global · 1v1 · $7.00 · 30 Espacios</p>
                        </div>
                    </div>

                    <!-- Torneo Apex -->
                    <div class="torneo-item">
                        <div class="icono__apex_legends">
                            <a href="#"><img src="/iconos/logoApex.png" alt="Apex Legends">
                            </a>
                        </div>
                        <div class="boton__torneo__apex_legends">
                        <a href="#" class="boton__torneo">
                        <img src="Imagenes Destacada\Img. Torneos\TORNEO APEX.png" alt="Torneo Apex Legends">
                        </a>
                    </div>
                        <div class="torneo-info">
                            <p>Dia y Hora del evento</p>
                            <a href="#">
                            <p><span class="boton__organizadores__torneo"><img src="iconos/Iconos png/usuario.png" alt=""></span> Nombre Del Torneo</p>
                            </a>
                            <p class="info__torneo__apex_legends">Global · 1v1 · $7.00 · 30 Espacios</p>
                        </div>
                    </div>

                </div>
            </section>

        <!-- FOOTER -->
        <footer>
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="iconos/Iconos png/LOGO.png" alt="Logo">
                    <h2>PLAY PULSE</h2>
                </div>
                <div class="footer-social">
                    <a href="#"><img src="./iconos/Iconos png/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="./iconos/Iconos png/x.png" alt="Twitch"></a>
                    <a href="#"><img src="./iconos/Iconos png/youtube.png" alt="YouTube"></a>
                    <a href="#"><img src="./iconos/Iconos png/discord.png" alt="Discord"></a>
                </div>
            </div>
        </footer>    
    </main>

    <script>
    function redirectToAnotherPage() {
        window.location.href = "login.php";
    }
    function redirectToAnotherPageRegistrarse() {
        window.location.href = "registro.php";
    }
    </script>
</body>
</html>