<?php
require "includes/templates/header.php";
?>
<main class="seccion contenedor">
    <h1 class="text-center">Noticias</h1>

    <div class="contenedor-noticias3">
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

        <div class="noticia">
            <picture>
                <source srcset="build/img/amas-disco.webp" type="image/webp" />
                <source srcset="build/img/amas-disco.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/amas-disco.jpg" alt="promo amas" title="Cartel Premios Amas" />
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

    </div> <!-- fin contenedor-noticias -->


</main>
<?php
include "includes/templates/footer.php";
?>