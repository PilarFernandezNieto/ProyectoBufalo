<?php
require "includes/app.php";
incluirTemplate("header");
?>
<main class="contenedor seccion">
    <h1>Discografía</h1>
    <div class="contenedor-discos">
        <div class="disco">
            <picture>
                <source srcset="build/img/cover_patrolman.webp" type="image/webp" />
                <img loading="lazy" width="200" height="300" src="cover_patrolman.jpg" alt="build/img/cover patrolman" />
            </picture>
            <div class="contenido-disco">
                <h2>Patrolman</h2>
                <p><span>Fecha de publicación: </span>14/Marzo/2023</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam.
                    Voluptas soluta commodi quas
                    voluptatum modi corrupti eius repudiandae, id velit voluptates quae asperiores non fugiat sequi?
                </p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam.
                    Voluptas soluta commodi quas
                    voluptatum.</p>
                <a href="tienda.html" class="boton-fireBrick">Comprar</a>
            </div>
        </div>
        <div class="disco">
            <picture>
                <source srcset="build/img/keepin.webp" type="image/webp" />
                <img loading="lazy" width="200" height="300" src="keepin.jpg" alt="build/img/cover patrolman" />
            </picture>
            <div class="contenido-disco">
                <h2>Keepin'it Warm</h2>
                <p><span>Fecha de publicación: </span>14/Marzo/2023</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam.
                    Voluptas soluta
                    commodi quas
                    voluptatum modi corrupti eius repudiandae, id velit voluptates quae asperiores non fugiat sequi?
                </p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam.
                    Voluptas soluta
                    commodi quas
                    voluptatum.</p>
                <a href="tienda.html" class="boton-fireBrick">Comprar</a>
            </div>
        </div>
        <div class="disco">
            <picture>
                <source srcset="build/img/hiddn.webp" type="image/webp" />
                <img loading="lazy" width="200" height="300" src="hiddn.jpg" alt="build/img/cover patrolman" />
            </picture>
            <div class="contenido-disco">
                <h2>Hidin' from the butcher</h2>
                <p><span>Fecha de publicación: </span>14/Marzo/2023</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam.
                    Voluptas soluta
                    commodi quas
                    voluptatum modi corrupti eius repudiandae, id velit voluptates quae asperiores non fugiat sequi?
                </p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic asperiores quos amet aliquam.
                    Voluptas soluta
                    commodi quas
                    voluptatum.</p>
                <a href="tienda.html" class="boton-fireBrick">Comprar</a>
            </div>
        </div>

    </div>
</main>


<?php
include "./includes/templates/footer.php";
?>