<?php
header("Access-Control-Allow-Origin:*");

require_once '../conexion/conexion.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "crear":
      crearLibro();
    break;
    case "eliminar":
     eliminarLibro();
    break;
    case "modificar":
        modificarLibro();
    break;
    case "obtener":
        obtenerLibro();
    break;
}

function crearLibro(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->agregarLibro($id, $nombre, $fecha, $precio);
    echo json_encode($resultado);
 }

 function modificarLibro(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $resultado = (new libro())->agregarLibro($id, $nombre, $fecha, $precio);
    echo json_encode($resultado) ;
}
function eliminarLibro(){
    $id = $_POST['id'];
    $resultado = (new libro())->eliminarLibro($id);
    echo json_encode($resultado);

}
function obtenerLibro(){
    $resultado = (new libro())->obtenerLibro();   
    echo json_encode($resultado);
}
?>