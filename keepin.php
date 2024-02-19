<?php
require "includes/templates/header.php";
?>

<main class="contenedor seccion">
    <h1>Keepin'it Warm</h1>
    <div class="contenido-ficha-disco seccion5">
        <div class="texto-disco">
            <p>Año de edición: 2016</p>
            <p>Sello: <b>Boomerang Discos</b></p>
            <p>Formato: CD</p>
            <p>Personal:</p>
            <ul>
                <li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica, eléctrica y 12-cuerdas, pedal steel y voz</li>
                <li><b>Alejandro Blanco</b>: bajo</li>
                <li><b>Wilón DeCalle</b>: batería y coros</li>
                <li><b>José Ramón Feito:</b>: piano, hammond, rhodes y wurlitzer</li>
                <li><b>Angel Ruíz</b>: banjo</li>
                <li><b>Dani “Desmond” Sevillano</b>: ingeniero de sonido</li>

            </ul>

            <p>Fotos: <b>Iris Benítez</b></p>
            <p>Artwork: <b>Wilón DeCalle</b></p>
            <p>Todas las canciones compuestas por The Electric Buffalo.</p>
            <p>Grabado, mezclado y masterizado en Eclipse Estudios (Oviedo) por Dani “Desmond” Sevillano en septiembre de 2015.</p>
            <p>Producido por Dani “Desmond” Sevillano y The Electric Buffalo</p>

        </div>
        <div class="">
            <picture>
                <source srcset="build/img/keepin.webp" type="image/webp" />
                <source srcset="build/img/keepin.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/keepin.jpg" alt="cover_keepin" title="Portada Keepin" />
            </picture>

        </div>
    </div>



</main>

<?php
include "includes/templates/footer.php";
?>