<?php
#Recibir parámetros desde el request
$nombre = $_REQUEST['nombre'];
$cantidad = $_REQUEST['cantidad'];
$precio = $_REQUEST['precio'];
$aplica_descuento = $_REQUEST['aplica_descuento'];
#invocar al modelo
include_once './ModelFerreteria.php';
$producto = new Producto($nombre, $precio, $cantidad, $aplica_descuento);

$modelFerreteria = new ModelFerreteria();

$producto = $modelFerreteria->procesar($producto);


#guardar en session
session_start();
$_SESSION['producto'] = serialize($producto); #Transformacion de la info para que se guarde correctamente en memoria o disco duro
#si ya existe la descargo y la almaceno en la lista de productos




if (isset($_SESSION['listaProductos'])) {
    $listaProductos = unserialize($_SESSION['listaProductos']);
} else {
    $listaProductos = array();
}

$listaProductos = $modelFerreteria->agregarProducto($listaProductos, $producto);

$_SESSION['total'] = $modelFerreteria->valorTotalPagar($listaProductos);

$_SESSION['listaProductos'] = serialize($listaProductos);

//Imprimir un objeto y todos los valores
// print_r($listaProductos);

//control de navegacion
header('Location: resultado.php');
