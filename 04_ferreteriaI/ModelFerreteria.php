<?php
include_once './Producto.php';

class ModelFerreteria{
    public function agregarProducto($listaProductos,$producto){
        if(!isset($listaProductos)){
            $listaProductos=array();
        }
        array_push($listaProductos,$producto);
        return $listaProductos;
    }
    public function procesar($producto){
        if($producto->getTieneDescuento()=="SI"){
            $producto->setSubtotal($producto->getPrecio()*$producto->getCantidad());
            $descuento=$producto->getSubtotal()*0.1;
            $producto->setSubtotal($producto->getSubtotal()-$descuento);
        }else{
            $producto->setSubtotal($producto->getPrecio()*$producto->getCantidad());
        }
        return $producto;
    }
}