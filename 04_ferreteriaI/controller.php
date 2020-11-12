<?php

//recibir parametros:
$nombre=$_REQUEST['nombre'];
$cantidad=$_REQUEST['cantidad'];
$precio=$_REQUEST['precio'];
$aplica_descuento=$_REQUEST['aplica_descuento'];

//invocar al modelo:
include_once './ModelFerreteria.php';
$producto=new Producto($nombre,$precio,$cantidad,$aplica_descuento);
$modelFerreteria=new ModelFerreteria();
$producto=$modelFerreteria->procesar($producto);

//guardar en sesion:
session_start();
$_SESSION['producto']=serialize($producto);
if(isset($_SESSION['listaProductos'])){
    $listaProductos=unserialize($_SESSION['listaProductos']);
}else{
    $listaProductos=array();
}
$listaProductos=$modelFerreteria->agregarProducto($listaProductos,$producto);
$_SESSION['listaProductos']=serialize($listaProductos);

print_r($listaProductos);
//control de navegacion:
header('Location: resultado.php');
