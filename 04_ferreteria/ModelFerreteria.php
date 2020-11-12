<?php
include_once './Producto.php';
class ModelFerreteria
{
    public function agregarProducto($listaProductos, $producto)
    {
        # si listaProductos es null
        if (!isset($listaProductos)) {
            $listaProductos = array(); #Se crea la instancia de un array
        }
        array_push($listaProductos, $producto);
        return $listaProductos;
    }

    public function procesar($producto)
    {
        if ($producto->getTieneDescuento() == "SI") {
            $producto->setSubtotal($producto->getPrecio() * $producto->getCantidad());
            $descuento = $producto->getSubtotal() * 0.1;
            $producto->setSubtotal($producto->getSubtotal() - $descuento);
        } else {
            $producto->setTieneDescuento("NO");
            $producto->setSubtotal($producto->getPrecio() * $producto->getCantidad());
        }
        return $producto;
    }

    public function valorTotalPagar($listaProductos)
    {
        $total = 0;
        foreach ($listaProductos as $p) {
            $total = $total + $p->getSubTotal();
        }
        return $total;
    }
}
