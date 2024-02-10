<?php
require "../../includes/app.php";
incluirTemplate("sidebar_menu");
$db = conectarDB();
$id = filter_var($_GET["id"]);

if (!$id) {
    header("Location: /admin");
}

$query = "SELECT * FROM noticias WHERE id={$id}";
$consulta = mysqli_query($db, $query);
$noticia = mysqli_fetch_assoc($consulta);

// Mensajes de errores
$errores = [];
$error = "";

$titulo = $noticia["titulo"];
$intro = $noticia["intro"];
$texto = $noticia["texto"];
$fecha = $noticia["fecha"];
$fecha_creacion = $noticia["fecha_creacion"];
$imagenNoticia = $noticia["imagen"];


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
    $intro = mysqli_real_escape_string($db, $_POST["intro"]);
    $texto = mysqli_real_escape_string($db, $_POST["texto"]);
    $fecha = mysqli_real_escape_string($db, $_POST["fecha"]);
    $fecha_creacion = mysqli_real_escape_string($db, date("Y-m-d"));
    $imagen = $_FILES["imagen"];


    // TODO VALIDAR UNA EXTENSIÓN MÍNIMA DE TEXTO DE LA NOTICIA
    // if(strlen($texto) < 50){
    //     $errrores[] = "Debes introducir un texto más largo";
    // }
    if (!$titulo) {
        $errores[] = "Debes introducir un título";
    }
    if (!$intro) {
        $errores[] = "Debes introducir una intro";
    }
    if (!$texto) {
        $errores[] = "Debes introducir un texto";
    }
    if (!$fecha) {
        $errores[] = "Debes introducir una fecha";
    }

    $medida = 1000 * 1000;
    if ($imagen["size"] > $medida) {
        $errores[] = "La imagen es demasiado grande";
    }

    if (empty($errores)) {

        $carpetaImagenes = "../../imagenes/";
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        $nombreImagen = "";

        /** Elimina las imágenes que se actualizan **/
        if($imagen["name"]){
            unlink($carpetaImagenes.$noticia["imagen"]);
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);
        } else {
            $nombreImagen = $noticia["imagen"];
        }
        


       

        $query = "UPDATE noticias SET titulo='{$titulo}', intro='{$intro}', texto='{$texto}', imagen='{$nombreImagen}', fecha='{$fecha}' WHERE id={$id}";



        try {
            $resultado = $db->query($query);

            if ($resultado) {
                header("Location: listado_noticias.php?exito=true&accion=actualizar");
            } else {
                echo "Error al insertar registro: No se pudo realizar la inserción.";
            }
        } catch (Exception $e) {
            $errores[] =  "Error al insertar registro: " . ($e->getCode() === 1062) ? "Esa noticia ya existe" : "Ha ocurrido un error";
        }
    }
}


?>
<section class="central contenedor seccion">
    <h2>Actualizar Noticia</h2>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>


    <form action="" class="formulario" method="POST" enctype="multipart/form-data">

        <div class="campo">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título de la noticia" value="<?php echo $titulo; ?>">
        </div>

        <div class="campo">
            <label for="intro">Introducción</label>
            <input type="text" id="intro" name="intro" placeholder="Intro de la noticia" value="<?php echo $intro; ?>">
        </div>

        <div class="campo">
            <label for="texto">Texto</label>
            <textarea name="texto" id="texto" name="texto" placeholder="Texto de la noticia"><?php echo $texto; ?></textarea>

        </div>

        <div class="campo">
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
            <img src="/imagenes/<?php echo $noticia['imagen']; ?>" alt="imagen_noticia" style="width:150px" class="mt-3">
        </div>
        <div class="campo">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
        </div>

        <input type="submit" class="boton-fireBrick" value="Actualizar">

    </form>

</section>

<?php
incluirTemplate("sidebar_footer");
