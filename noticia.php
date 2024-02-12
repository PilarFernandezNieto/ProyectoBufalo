<?php
require "includes/app.php";
$db = conectarDB();
incluirTemplate("header");

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);
$query = "SELECT * FROM noticias WHERE id= {$id}";

$consulta = mysqli_query($db, $query);
$noticia = mysqli_fetch_assoc($consulta);



?>
<main class="contenedor seccion5 alto-min contenido-centrado">
    <h1><?php echo $noticia["titulo"]; ?></h1>
    <img loading="lazy" src="imagenes/<?php echo $noticia['imagen']; ?>">
   
        <div class="contenido-noticia">
            <h2><?php echo $noticia["intro"]; ?></h2>
            <p class="fecha"><?php echo fechas($noticia["fecha"]); ?></p>
            <p class=texto><?php echo $noticia["texto"]; ?>
            </p>
        </div>
 
</main>


<?php
mysqli_close($db);
incluirTemplate("footer");
?>