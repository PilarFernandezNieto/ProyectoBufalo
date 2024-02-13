<?php
require "includes/app.php";
incluirTemplate("header");
?>
<!-- FIN HEADER -->
<main class="contenedor seccion">
    <h1>15 años de Rock</h1>
    <div class="contenido-filas">
        <div class="imagen box1">
            <picture>
                <source srcset="build/img/risas_baja.webp" type="image/webp">
                <source srcset="build/img/risas_baja.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/risas_baja.jpg" alt="risas_baja">
            </picture>
        </div>
        <div class="texto-historia box2">
            <p>The Electric Buffalo (Oviedo) surge, como idea, en un garito de costumbres rockeras allá por el año 2006, en
                Oviedo. Álvaro y Wilón, fans estudiosos y entusiastas de los Gov’t Mule, acuerdan, entre vapores etílicos
                y con el Deepest End de fondo toda la noche (cortesía de Chiri y Noe, porque en su casa, el Sweet
                Home, sabían cuidar bien de su gente), formar una banda con una única condición: hacer exactamente
                lo que les dé la gana sin ninguna prisa ni pretensión.</p>
            <div>
                <p>
                    Ahí surgió la idea, pero faltaba la banda. El siguiente paso fue buscar un bajista y decidieron tantear a
                    Alejandro “Espina”. Jandro, bajista de Ilegales por aquella época, era muy conocido también por haber
                    sido profesor de bajo en el Taller de Músicos de Oviedo y por suministrar risas, comedia a paladas,
                    cervezas y música en otro garito rockero y molón de la calle Martínez Vigil de Oviedo, La Armónica
                    Blues Bar, que regentaba su mujer, Irene.
                </p>
                <p>No se hizo de rogar. Álvaro se lo planteó y Jandro dijo “sí” al momento.</p>
            </div>
        </div>
    </div>
    <div class="contenido-historia seccion">

        <div class="texto-historia caja1">
            <p>A partir de ahí, fueron largas mañanas de ensayos en Agüera (La Regueras-Asturias) a unos 30 minutos
                en coche de la capital, previo paso por Casa Edelmiro a desayunar religiosamente. Entre 2006 y 2009
                se fue cociendo el que sería el primer álbum de la banda “Hidin’ from the Butcher” (2009), la primera y
                única referencia de Ouroboros Records; una autoedición que tuvo a los mandos al sumo sacerdote de
                Eclipse Estudios, el gran Dani “Desmond” Sevillano.</p>
            <p>
                Van pasando los años desde la salida del disco y la banda va juntándose en las pocas ocasiones que
                Ilegales y los otros proyectos de Álvaro y Wilón les van dejando. Pero, bueno... esa era la premisa
                básica, ¿no? No rush. Take your time. En 2016 estaba el segundo largo de la banda, “Keepin’ it warm”
                (Boomerang Discos), calentito y a punto de salir del horno, cuando ocurrió lo absolutamente inesperado
                y devastador.
            </p>
            <p>La muerte de Alejandro.</p>
            <div class="imagen">
                <picture>
                    <source srcset="build/img/PROMO_3.webp" type="image/webp">
                    <source srcset="build/img/PROMO_3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/risas_baja.jpg" alt="PROMO_3">
                </picture>
            </div>
        </div>
        <div class="imagen caja2">
            <picture>
                <source srcset="build/img/_IGP1987.webp" type="image/webp">
                <source srcset="build/img/_IGP1987.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/risas_baja.jpg" alt="trio_joven">
            </picture>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h2>La Banda</h2>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 p-0 musico">
            <a class="btn" data-bs-toggle="collapse" href="#STutu" role="button" aria-expanded="false" aria-controls="STutu">
                <figure class="figure">
                    <img src="build/img/tutu_bajares.jpg" class="figure-img img-fluid rounded" alt="Sergio_Tutu">
                    <figcaption class="figure-caption text-end">Foto de Paco Vigil</figcaption>
                </figure>
            </a>
            <div class="collapse" id="STutu">
                <div class="card card-body">
                    <p>Sergio Tutu. Bajista y productor musical. Ha sido y es miembro de bandas como los Deltonos o
                        Alto Volto. Se encarga de producir los discos en su estudio Tutu.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 p-0 musico">
            <a class="btn" data-bs-toggle="collapse" href="#SRodriguez" role="button" aria-expanded="false" aria-controls="SRodriguez">
                <figure class="figure">
                    <img src="build/img/samII.JPG" class="figure-img img-fluid rounded" alt="Sam_Rodríguez">
                    <figcaption class="figure-caption text-end">Foto de Paco Vigil</figcaption>
                </figure>
            </a>
            <div class="collapse" id="SRodriguez">
                <div class="card card-body">
                    <p>Sam Rodríguez. Piano y teclados. No nos cogerían aquí todas las bandas en las que participa.
                        Cabe destacar a la mejor banda tributo a Dire Straits, The Real Straits, o Sinatra&Jobim
                        Project
                        entre muchísimos otros.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 p-0 musico">
            <a class="btn" data-bs-toggle="collapse" href="#ABarcena" role="button" aria-expanded="false" aria-controls="ABarcena">
                <figure class="figure">
                    <img src="build/img/alvaroI_bajares.jpg" class="figure-img img-fluid rounded" alt="Álvaro_Barcena">
                    <figcaption class="figure-caption text-end">Foto de Paco Vigil</figcaption>
                </figure>
            </a>
            <div class="collapse" id="ABarcena">
                <div class="card card-body">
                    <p>Álvaro Bárcena. Guitarra y voz. Prodigio de la guitarra y virtuoso con su voz. Es al autor de
                        todas las canciones de la banda. Entre sus muchas colaboraciones destacamos la banda de
                        Pablo Moro y
                        sus Chicos Listos.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 p-0 musico">
            <a class="btn" data-bs-toggle="collapse" href="#WdeCalle" role="button" aria-expanded="false" aria-controls="WdeCalle">
                <figure class="figure">
                    <img src="build/img/willyJam_bajares.jpg" class="figure-img img-fluid rounded" alt="WilonDeCalle">
                    <figcaption class="figure-caption text-end">Foto de Wesley</figcaption>
                </figure>
            </a>
            <div class="collapse" id="WdeCalle">
                <div class="card card-body">
                    <p>WilónDeCalle. Batería y coros. Gran profesional con una dedicación meticulosa en todos sus
                        trabajos. Ha colaborado en bandas como Muñeco Vudú, Bueno, Alto Volto, Rafa Kas Trío,
                        Mbolados, Hot Shots o Commodoros.</p>
                </div>
            </div>
        </div>

    </div>
</section>


<?php
include "./includes/templates/footer.php";
?>