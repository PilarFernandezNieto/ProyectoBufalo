<!-- TEMPLATE DEL LISTADO DE NOTICIAS -->
<?php
$db = conectarDB();

$query = "SELECT * FROM noticias";
$consulta = mysqli_query($db, $query);

?>


<div class="contenedor-noticias">
    <?php while ($noticia = mysqli_fetch_assoc($consulta)) : ?>
        <div class="noticia">
            <img loading="lazy" src="/imagenes/<?php echo $noticia['imagen']; ?>" alt="ELECTRIC_BUFFALO">

            <div class="contenido-noticias">
                <h3><?php echo $noticia["titulo"]; ?></h3>
                <h4><?php echo $noticia["intro"]; ?></h4>
                <p><?php echo htmlspecialchars(truncate($noticia["texto"], 200)); ?></p>
                <p class="fecha alinear-derecha"><?php echo $noticia["fecha"]; ?></p>
                <a href="noticia.php?id=<?php echo $noticia['id']; ?>" class="boton-fireBrick">Más...</a>
            </div> <!-- fin contenido-noticias -->
        </div> <!-- fin noticia -->
    <?php endwhile; ?>
</div> <!-- fin contenedor-noticias -->