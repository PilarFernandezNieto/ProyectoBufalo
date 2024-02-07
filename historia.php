<?php
include "./includes/templates/header.php";
?>
<!-- FIN HEADER -->
<main class="contenedor seccion">
    <h1>Esta es nuestra historia</h1>
    <div class="contenido-historia">
        <div class="imagen">
            <picture>
                <source srcset="build/img/buffalos_inicios.webp" type="image/webp">
                <source srcset="build/img/buffalos_inicios.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/buffalos_inicios.jpg" alt="ELECTRIC_BUFFALO">
            </picture>
        </div>
        <div class="texto-historia">
            <h2>15 años de Rock &amp; Roll</h2>
            <p>Siete años hacía que no sentíamos este temblor de la tierra moviéndose bajo las suelas de nuestras
                botas, mientras en el
                horizonte, una espesa nube de polvo se levanta por encima de las colinas. Los buitres vuelan en
                círculos sobre nuestras
                cabezas y las nubes tapan el sol. Niños pasmados miran sin entender qué está pasando; las mujeres
                recogen cubos de agua
                y ropa tendida y entran en sus casas sellando puertas y ventanas. Algunos hombres con la cara seca
                como el cuero y el
                rostro curtido se adelantan y beben un buen trago de licor. Como un trueno, a lo lejos, pueden verse
                tres siluetas. Las
                mismas tres siluetas de entonces. Hay un viejo sentado en un tronco con un palillo en la boca. A
                duras penas se levanta,
                coloca la hebilla de su cinturon, escupe y sonríe. En voz baja se le oye decir: “han vuelto a soltar
                a la manada”.

                Alejandro Espina (bajo), Álvaro Bárcena (guitarra y voz) y Wilón de Calle (batería). Formación
                original de la banda
                asturiana The Electric Buffalo.</p>
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