<?php
require "includes/templates/header.php";
require "includes/funciones.php";
?>

<main class="contenedor seccion5 alto-min contenido-centrado">
    <h2>Patrolman. Premio al mejor disco-rock 2023</h2>
    <picture>
        <source srcset="build/img/willy_alvaro_amas.webp" type="image/webp" />
        <source srcset="build/img/willy_alvaro_amas.jpg" type="image/jpeg" />
        <img loading="lazy" width="200" height="300" src="build/img/willy_alvaro_amas.jpg" alt="Premio Amas" title="Alvaro y Wilón en los AMAS" />
    </picture>
    <div class="noticia-interna">
        <p class="fecha">24/02/2024</p>

        <div class="contenido-noticia">
            <h3>El mejor disco-rock de 2023</h3>
            <p class="texto"></p>
        </div>
    </div>
    <div class="ms-3 mb-3">
        <a href="index.php" class="boton-fireBrick">Volver</a>
    </div>
</main>
<?php
require "includes/templates/footer.php";
