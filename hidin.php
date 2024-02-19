<?php
require "includes/templates/header.php";
?>

<main class="contenedor seccion">
    <h1>Hidin' from the butcher</h1>
    <div class="contenido-ficha-disco seccion5">
        <div class="texto-disco">
            <p>Año de edición: 2009</p>
            <p>Sello: <b>Ouroboros Records</b></p>
            <p>Formato: CD</p>
            <p>Personal:</p>
            <ul>
                <li><b>Álvaro “Daddy” Bárcena</b>: guitarra acústica y eléctrica, mandolina y voz</li>
                <li><b>Alejandro Blanco</b>: bajo</li>
                <li><b>Wilón DeCalle</b>: batería</li>
                <li><b>Chus “Crocodile Crazy Hammond” Neira</b>: teclados y hammond</li>
                <li><b>Manfred</b>: voz en “Don’t rock the boat” y coros</li>
                <li><b>Mary Page</b>: coros</li>
                <li><b>Dani “Desmond” Sevillano</b>: ingeniero de sonido</li>

            </ul>

            <p>Fotos: <b>Manfred</b></p>
            <p>Artwork: <b>Wilón DeCalle</b></p>
            <p>Todas las canciones compuestas por The Electric Buffalo.</p>
            <p>Grabado, mezclado y masterizado en Eclipse Estudios (Oviedo) por Dani “Desmond” Sevillano entre diciembre de 2008 y marzo de 2009.</p>
            <p>Producido por Dani “Desmond” Sevillano y The Electric Buffalo</p>

        </div>
        <div class="imagen-disco">
            <picture>
                <source srcset="build/img/hiddn.webp" type="image/webp" />
                <source srcset="build/img/hiddn.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/hiddn.jpg" alt="cover_hidin" title="Portada Hiddin" />
            </picture>

        </div>
    </div>
</main>

<?php
include "includes/templates/footer.php";
?>