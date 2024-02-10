<?php
require "../../includes/app.php";
incluirTemplate("admin_sidebar");
$db = conectarDB();

// Mensajes de errores
$errores = [];

$error = "";
$titulo = "";
$intro = "";
$texto = "";
$fecha = "";
$fecha_creacion = date("Y-m-d");


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
    if (!$imagen["name"]) {
        $errores[] = "Debes introducir una imagen";
    }
    $medida = 1000 * 1000;
    if($imagen["size"] > $medida){
        $errores[] = "La imagen es demasiado grande";
    }

    if (empty($errores)) {
        /** subida de archivos **/

    
        $carpetaImagenes = "../../imagenes/";
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);
 
        $query = "INSERT INTO noticias(titulo, intro, texto, imagen, fecha, fecha_creacion) VALUES ('{$titulo}', '{$intro}', '{$texto}', '{$nombreImagen}','{$fecha}', '{$fecha_creacion}')";

        try {
            $resultado = $db->query($query);

            if ($resultado) {
               header("Location: listado_noticias.php?exito=true&accion=crear");
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
    <h2>Nueva Noticia</h2>
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
        </div>
        <div class="campo">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $fecha; ?>">
        </div>

        <input type="submit" class="boton-fireBrick" value="Enviar">

    </form>

</section>

<?php
incluirTemplate("admin_footer");
