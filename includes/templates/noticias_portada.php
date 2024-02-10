<?php
$db = conectarDB();

$query = "SELECT * FROM noticias LIMIT 2";
$consulta = mysqli_query($db, $query);

?>
<div class="noticias-portada">
    <?php while ($noticia = mysqli_fetch_assoc($consulta)) : ?>
        <div class="noticia escala">
            <picture>
                <source srcset="build/img/ELECTRICBUFFALO2023-67.webp" type="image/webp">
                <source srcset="build/img/ELECTRICBUFFALO2023-67.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/ELECTRICBUFFALO2023-67.jpg" alt="ELECTRIC_BUFFALO">
            </picture>
            <div class="contenido-noticias">
                <h3><?php echo $noticia["titulo"]; ?></h3>
                <div class="texto-noticia">
                    <h4><?php echo $noticia["intro"]; ?></h4>
                    <p><?php echo $noticia["texto"]; ?></p>
                    <p class="fecha alinear-derecha"><?php echo $noticia["fecha"]; ?></p>
                </div>
                <a href="noticia.php" class="boton-fireBrick">Más...</a>

            </div>
        </div>
    <?php endwhile; ?>

</div>