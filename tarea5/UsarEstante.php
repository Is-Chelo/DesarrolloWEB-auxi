<?php
include("Estante.php");
$estante = new Estante();



$opcion = $_GET['opcion'];



switch ($opcion) {
    case "insertar":
        header("Location: insertar.html");
        break;
        
    case "mostrar":
        $estante->mostrarTodo();
        break;

}
