<?php
require "includes/templates/header.php";
?>
<div class="imagen-header">
    <div class="overlay-header"></div>
</div>
<!-- CONTENIDO DESTACADO -->
<section class="contenedor contenido-destacado">
    <div class="imagen cover">
        <a href="patrolman.php">
            <picture>
                <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
                <source srcset="build/img/cover_patrolman.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/cover_patrolman.jpg" alt="cover_patrolman" />
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
                        <!-- la propiedad controlslist me produce un error en el validador de html pero es la única manera que encontré de desactivar las descargas -->
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

        </article>
    </div>
</section>
<!-- FIN CONTENIDO DESTACADO -->
<!-- IMAGEN CENTRAL -->
<section class="imagen-central">
    <div class="overlay-central"></div>
    <div class="contenido-central">
        <h3>Este es nuestro trabajo</h3>
        <a href="discografia.php" class="boton-fireBrick">Discografía</a>
    </div>


</section>
<!-- FIN IMAGEN CENTRAL -->

<!-- NOTICIAS -->
<section class="seccion contenedor">
    <h3 class="text-center">Noticias</h3>

    <div class="contenedor-noticias">
        <div class="noticia">
            <picture>
                <source srcset="build/img/amas-disco.webp" type="image/webp" />
                <img loading="lazy" width="200" height="300" src="build/img/amas-disco.jpg" alt="promo amas" />
            </picture>
            <div class="contenido-noticias">
                <h3>Nominación Mejor Disco Rock</h3>
                <h4>Premios Amas</h4>
                <div class="texto">
                    <p>El próximo <b>23 de febrero</b> tendrá lugar la ceremonia de entrega de los Premios Amas de la Música Asturiana, a los que la banda está nominada en la categoría de “mejor disco Rock”.</p>
                </div>

                <p class="fecha alinear-derecha">11/02/2024</p>
              
            </div> <!-- fin contenido-noticias -->
        </div> <!-- fin noticia -->

        <div class="noticia">
            <picture>
                <source srcset="build/img/cartel-factoria.webp" type="image/webp" />
                <img loading="lazy" width="200" height="300" src="build/img/cartel-factoria.jpg" alt="promo factoria" />
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




</section>
<!-- FIN NOTICIAS -->

<?php
include "includes/templates/footer.php";
?>