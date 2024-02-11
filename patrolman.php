<?php
require "includes/app.php";
incluirTemplate("header");
?>

<main class="contenedor seccion">
    <h1>Patrolman</h1>
    <div class="contenido-historia seccion">
        <div class="texto-historia">
            <p>Año de edición: 2023</p>
            <p>Personal:</p>
            <ul>
                <li>Álvaro “Daddy” Bárcena: guitarra acústica y eléctrica, pedal steel y voz</li>
                <li>Sergio “Tutu” Rodríguez: bajo / ingeniero de sonido</li>
                <li>“Stone” Sam Rodríguez: teclados, hammond y wurlitzer</li>
                <li>Wilón DeCalle: batería y percusión</li>
                <li>Sil Fernández: coros</li>
                <li>Juan Yagüe: guitarra acústica y bouzouki</li>
                <li>Cristina Gestido: viola</li>
            </ul>

            <p>Fotos: Wesley, Manfred, Dena Flows y Eloy Beltené</p>
            <p>Artwork y diseño carpeta: Ossobüko Studio</p>
            <p>Todas las canciones compuestas por The Electric Buffalo.</p>
            <p>Grabado y mezclado en Tutu Estudios (Corvera) y masterizado por Dani “Desmond” Sevillano entre
                septiembre y octubre de 2022.</p>
            <p>Producido por Sergio “Tutu” Rodríguez</p>

        </div>
        <div class="imagen">
            <picture>
                <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
                <source srcset="build/img/cover_patrolman.jpg" type="image/jpeg" />
                <img loading="lazy" width="200" height="300" src="build/img/cover_patrolman.jpg" alt="cover_patrolman" />
            </picture>

        </div>
    </div>
    <div class="contenido-historia seccion">
        <div class="imagen">
            <picture>
                <source srcset="build/img/buffalos_inicios.webp" type="image/webp">
                <source srcset="build/img/buffalos_inicios.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/buffalos_inicios.jpg" alt="ELECTRIC_BUFFALO">
            </picture>
        </div>
        <div class="texto-historia">
            <p>
                Este trabajo, el tercero de su andadura por los sinuosos senderos del rock, se eleva como una plegaria y acaba constituyendo un exorcismo de todos los demonios aparecidos tras la muerte, en 2016, de Alejandro “Espina” Blanco, miembro fundador de la banda y también bajista de Ilegales durante 20 años.
            </p>
            <p>
                Patrolman (Boomerang Discos) es, con toda la autoridad, un disco de rock con mayúsculas. La
                producción, a cargo del también miembro de la banda Sergio “Tutu”, no da opción a la especulación. Las
                canciones, el arma secreta del cuarteto, suenan como una apisonadora con rodillo de seda, y esa voz,
                quizá una de las mejores de España, se deja oír con ese timbre precioso, delicado pero no sensiblero
                y seguro sin ser arrogante, de los que saben perfectamente qué se traen entre manos. Esa voz que
                canaliza los esfuerzos de la banda hacia el corazón del oyente y lo hace palpitar gracias a un voltaje
                emocional de primer orden que va in crescendo porque todo el álbum está grabado en memoria de
                Alejandro. El título, Patrolman (“Patrullero”), era lo primero que salía de la boca de Alejandro cuando te
                lo encontrabas por ahí: “¡Qué pasa, patrullero!”, soltaba, siempre con una enorme sonrisa en la cara.
            </p>
            <p>
                El disco está planteado en dos caras muy reconocibles que permiten degustar en primer y segundo
                plato. En la cara A mandan las canciones que funcionarían perfectamente con una guitarra acústica al
                calor de una hoguera. Es una delicatessen rock. Canciones de dura piel y alma de pura nobleza; quizá
                exceptuando You know how, pieza con influencias sureñas que podría ser digna de los legendarios
                Lynyrd Skynyrd. La cara B, sin embargo, muestra a la banda estallando en riffs más duros, menos
                amables, que permiten al cuarteto destapar su volcán interior, dar una lección magistral de cómo tejer
                instrumentos y construir un edificio de rock, y terminar rematando el álbum con una joya llamada
                Walking behind
            </p>
            <p>
                Hay artistas y hay artesanos, pero The Electric Buffalo son ambas cosas a la vez. Es un disco
                donde se destilan años de oficio, pero con ese pellizco que les diferencia y les eleva a los cielos, igual
                que al añorado Alejandro.
            </p>
            <blockquote class="alinear-derecha">-Igor Paskual-</blockquote>
        </div>
    </div>


</main>

<?php
incluirTemplate("footer");
?>