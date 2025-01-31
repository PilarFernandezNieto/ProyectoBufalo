<?php
require "includes/templates/header.php";
?>
<div class="imagen-header">
    <div class="overlay-header"></div>
    <div class="contenedor contenido-imagen">
        <h2>The Electric Buffalo</h2>
        <p>Patrolman</p>
    </div>
</div>

<span class="caption text-end">Foto de Paco Vigil</span>
<!-- CONTENIDO DESTACADO -->
<section class="contenedor contenido-destacado">
    <div class="imagen cover">
        <a href="patrolman.php">
            <picture>
                <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
                <source srcset="build/img/cover_patrolman.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/cover_patrolman.jpg" alt="cover_patrolman" title="Portada Patrolman" />
            </picture>
        </a>
    </div>
    <div class="contenido">
        <h2>Patrolman</h2>
        <p>Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una
            plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016,
            de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20
            años.</p>
        <p>Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La
            producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las
            canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz,
            quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero
            y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos.</p>


        <article id="btn_audio">
            <div class="text-center">
                <div class="">
                    <!-- BOTÓN QUE ACTIVA EL AUDIO -->
                    <p>
                        <button class="boton-fireBrick" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" title="new_song">
                            Escúchalo
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <audio controls class="audiostyle">
                            <source src="build/multimedia/A2-Patrolman.mp3" type="audio/mp3" />
                        </audio>
                    </div>
                </div>
            </div>
        </article>
        <article class="logos-redes contenedor">
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank">
                <picture>
                    <source srcset="build/img/youtuberecorte.webp" type="image/webp" />
                    <source srcset="build/img/youtuberecorte.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="build/img/youtuberecorte.png" alt="logo-youtube" class="youtube" />
                </picture>
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank">
                <picture>
                    <source srcset="build/img/Instagram_logo_2022.webp" type="image/webp" />
                    <source srcset="build/img/Instagram_logo_2022.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="build/img/Instagram_logo_2022.png" alt="logo-instagram" class="instagram" />
                </picture>
            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw" target="_blank">
                <picture>
                    <source srcset="build/img/spotifty.webp" type="image/webp" />
                    <source srcset="build/img/spotifty.png" type="image/png" />
                    <img loading="lazy" width="200" height="300" src="build/img/spotifty.png" alt="logo-spotify" class="spotify" />
                </picture>
            </a>
            <a href="https://www.facebook.com/TheElectricBuffalo" target="_blank">
                <picture>
                    <source srcset="build/img/facebook_logo.webp" type="image/webp" />
                    <source srcset="build/img/facebook_logo.jpeg" type="image/jpeg" />
                    <img loading="lazy" width="200" height="300" src="build/img/facebook_logo.jpeg" alt="facebook_logo" class="facebook" />
                </picture>
            </a>


        </article>
    </div>
</section>
<!-- FIN CONTENIDO DESTACADO -->


<!-- IMAGEN CENTRAL -->
<section class="imagen-central">
    <div class="overlay-central"></div>
    <div class="contenido-central">
        <h3>Discografía del Búfalo Eléctrico</h3>
        <a href="discografia.php" class="boton-fireBrick">Pincha aquí</a>
    </div>
</section>
<!-- FIN IMAGEN CENTRAL -->



<!-- NOTICIAS -->
<section class="seccion contenedor">
    <h2 class="text-center">Noticias</h2>

    <div class="contenedor-noticias3">
        <div class="noticia">
            <picture>
                <source srcset="build/img/factoria-sold-out.webp" type="image/webp" />
                <source srcset="build/img/factoria-sold-out.jpeg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/factoria-sold-out.jpeg" alt="sold out factoria" title="Cartel Sold Out Factoria Avilés" />
            </picture>
            <div class="contenido-noticias">
                <h3>Sold Out en la Factoría Cultural de Avilés</h3>
                <h4>Entradas agotadas</h4>
                <div class="texto">
                    <p>¡Gracias, familia!</p>
                    <p>Nos hace mucha ilusión anunciar que habéis completado el aforo disponible para el concierto del próximo <b>sábado, 23 de marzo</b> en la Factoría Cultural de Avilés.</p>
                    <p>¡Va a estar lleno! Y, la verdad, no nos lo esperábamos. Prometemos sudar la camisa de cuadros como siempre... O quizá un poco más, debido al subidón y las ganas de estampida que tenemos ahora mismo. ¡Oh, sí! </p>
                    <p>Este sábado a las <b>21:00</b>.</p>
                    <p>¡Nos vemos allí!</p>
                </div>

                <p class="fecha alinear-derecha">17/03/2024</p>

            </div> <!-- fin contenido-noticias -->
        </div> <!-- fin noticia -->
        <div class="noticia">
            <picture>
                <source srcset="build/img/willy_alvaro_amas.webp" type="image/webp" />
                <source srcset="build/img/willy_alvaro_amas.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/willy_alvaro_amas.jpg" alt="Premio Amas" title="Alvaro y Wilón en los AMAS" />
            </picture>
            <div class="contenido-noticias">
                <h3>Premio AMAS al mejor disco-rock 2023</h3>
                <h4>PATROLMAN gana la votación para el premio AMAS a MEJOR
                    DISCO ROCK 2023</h4>
                <div class="texto">
                    <p>Muchísimas gracias a todo el mundo que participó en la votación y consideró que nuestro trabajo merecía ser premiado. Nos hace mucha ilusión este premio y, aunque no podemos olvidar que de premios no se vive, sí que ayuda un poco y reconforta el espíritu para continuar la marcha en un mundo musical con una clase trabajadora, es decir, todas las personas que hacen sus canciones en sus locales de ensayo, cada vez más golpeada por las condiciones que impone el mercado.</p>
                </div>

                <p class="fecha alinear-derecha">24/02/2024</p>

            </div> <!-- fin contenido-noticias -->
            <div class="ms-3 mb-3">
                <a href="premio-amas.php" class="boton-fireBrick">Ver más</a>
            </div>
        </div> <!-- fin noticia -->
        <div class="noticia">
            <picture>
                <source srcset="build/img/cartel-factoria.webp" type="image/webp" />
                <source srcset="build/img/cartel-factoria.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/cartel-factoria.jpg" alt="promo factoria" title="Cartel Factoría Cultural Avilés" />
            </picture>
            <div class="contenido-noticias">
                <h3>Concierto Factoría Sound Avilés</h3>
                <h4>The Electric Buffalo en concierto</h4>
                <div class="texto">
                    <p>El próximo <b>23 de marzo</b>, The Electric Buffalo se subirá a las tablas de la <b>Factoría Cultural, en Avilés</b>, lugar emblemático por donde los mejores artistas internacionales pasan a mostrar sus trabajos. La banda está encantada de que los promotores hayan querido, en este primer ciclo de conciertos del año, que <b>Patrolman</b> sea presentado allí.</p>
                    <p> Si no tienes tus entradas, en este enlace puedes obtenerlas:</p>
                    <p><a href="https://uniticket.janto.es/palaciovaldes/public/janto/main.php#">Compra aquí tus entradas</a></p>
                </div>

                <p class="fecha alinear-derecha">11/02/2024</p>

            </div> <!-- fin contenido-noticias -->
        </div> <!-- fin noticia -->
    </div> <!-- fin contenedor-noticias -->
    <div class="alinear-derecha">
        <a href="/noticias.php" class="boton-fireBrick">Ver todas</a>
    </div>



</section>
<!-- FIN NOTICIAS -->

<?php
include "includes/templates/footer.php";
?>