<?php
    require "includes/funciones.php";
    incluirTemplate("header");
?>
    <section class="imagen-header">
        <div class="overlay-header"></div>
        <div class="contenedor contenido-imagen">
            <h2>The Electric Buffalo</h2>
            <p>Patrolman</p>
        </div>


    </section>
    <!-- CONTENIDO DESTACADO -->
    <section class="contenedor contenido-destacado">
        <div class="imagen cover">
            <picture>
                <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
                <source srcset="build/img/cover_patrolman.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/cover_patrolman.jpg"
                    alt="cover_patrolman" />
            </picture>
        </div>
        <div class="contenido">
            <h2>Patrolman</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam. Voluptas
                soluta commodi quas voluptatum modi corrupti eius repudiandae, id velit voluptates quae asperiores non
                fugiat sequi?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam. Voluptas
                soluta commodi quas voluptatum.
            </p>
            <article id="btn_audio">
                <div class="text-center">
                    <div class="">
                        <!-- BOTÓN QUE ACTIVA EL AUDIO -->
                        <p>
                            <button class="boton-fireBrick" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                                title="new_song">
                                Escúchalo
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <!-- la propiedad controlslist me produce un error en el validador de html pero es la única manera que encontré de desactivar las descargas -->
                            <audio controls class="audiostyle" controlslist="nodownload">
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
                        <img loading="lazy" width="200" height="300" src="build/img/Instagram_logo_2022.png"
                            alt="logo-instagram" class="instagram" />
                    </picture>
                </a>
                <a href="" target="_blank">
                    <picture>
                        <source srcset="build/img/spotifty.webp" type="image/webp" />
                        <source srcset="build/img/spotifty.png" type="image/png" />
                        <img loading="lazy" width="200" height="300" src="build/img/spotifty.png"
                            alt="logo-spotify" class="spotify"/>
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
            <h3>¿Quieres contactar?</h3>
            <p>Rellena el formulario y nos pondremos en contacto contigo.</p>
            <a href="contacto.php" class="boton-fireBrick">Contáctanos</a>
        </div>


    </section>
    <!-- FIN IMAGEN CENTRAL -->

    <!-- NOTICIAS -->
    <section class="seccion contenedor">
        <h3 class="text-center">Noticias</h3>
        <div class="contenedor-noticias">
            <div class="noticia">
                <picture>
                    <source srcset="build/img/ELECTRICBUFFALO2023-67.webp" type="image/webp">
                    <source srcset="build/img/ELECTRICBUFFALO2023-67.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/ELECTRICBUFFALO2023-67.jpg" alt="ELECTRIC_BUFFALO">
                </picture>
                <div class="contenido-noticias">
                    <h3>Volvemos a la carga</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab doloribus numquam quibusdam
                        reiciendis pariatur obcaecati neque eveniet expedita optio ea, aut ad nobis rerum quidem vero
                        beatae cum consequuntur dicta vel blanditiis accusamus delectus eum atque! Voluptates nulla
                        velit possimus consequatur tempore, magni, corporis nisi animi tenetur explicabo et?</p>
                    <p class="fecha alinear-derecha">02/02/2024</p>
                    <a href="noticia.php" class="boton-fireBrick">Más...</a>

                </div>
            </div>
            <div class="noticia">
                <picture>
                    <source srcset="build/img/ELECTRICBUFFALO2023-140.webp" type="image/webp">
                    <source srcset="build/img/ELECTRICBUFFALO2023-140.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/ELECTRICBUFFALO2023-140.jpg" alt="ELECTRIC_BUFFALO">
                </picture>
                <div class="contenido-noticias">
                    <h3>Volvemos a la carga</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab doloribus numquam quibusdam
                        reiciendis
                        pariatur obcaecati neque eveniet expedita optio ea, aut ad nobis rerum quidem vero beatae cum
                        consequuntur
                        dicta vel blanditiis accusamus delectus eum atque! Voluptates nulla velit possimus consequatur
                        tempore,
                        magni, corporis nisi animi tenetur explicabo et?</p>
                    <p class="fecha alinear-derecha">02/02/2024</p>
                    <a href="noticia.php" class="boton-fireBrick">Más...</a>

                </div>
            </div>
            <div class="noticia">
                <picture>
                    <source srcset="build/img/_DSC9433.webp" type="image/webp">
                    <source srcset="build/img/_DSC9433.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/_DSC9433.jpg" alt="ELECTRIC_BUFFALO">
                </picture>
                <div class="contenido-noticias">
                    <h3>Volvemos a la carga</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab doloribus numquam quibusdam
                        reiciendis
                        pariatur obcaecati neque eveniet expedita optio ea, aut ad nobis rerum quidem vero beatae cum
                        consequuntur
                        dicta vel blanditiis accusamus delectus eum atque! Voluptates nulla velit possimus consequatur
                        tempore,
                        magni, corporis nisi animi tenetur explicabo et?</p>
                    <p class="fecha alinear-derecha">02/02/2024</p>
                    <a href="noticia.php" class="boton-fireBrick">Más...</a>

                </div>
            </div>
        </div>
        <div class="alinear-derecha">
            <a href="noticias.php" class="boton-fireBrick">Ver todas</a>
        </div>
    </section>
    <!-- FIN NOTICIAS -->

    <?php 
        incluirTemplate("footer");
    ?>







    