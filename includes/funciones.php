<?php

define("TEMPLATES_URL", __DIR__ . "/templates");
define("FUNCIONES_URL", __DIR__ . "funciones.php");

function incluirTemplate($nombre){
    include TEMPLATES_URL . "/{$nombre}.php";

}

function debuguear($array = [], bool $salir = true){
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    if($salir){
        exit;
    }
}

function estaAutenticado() {
    session_start();
    if(!$_SESSION["login"]){
        header("Location: /");
    }
}
function fechas($fecha){
    return date("d-m-Y", strtotime($fecha));
}