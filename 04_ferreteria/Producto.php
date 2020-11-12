<?php

/**
 * Objeto DTO para representar los datos productos
 */

class Producto
{
    private $nombre;
    private $precio;
    private $cantidad;
    private $tieneDescuento;
    private $precioConIVA;
    private $subtotal;

    function __construct($nombre, $precio, $cantidad, $tieneDescuento)
    {
        #No hacer caluclos en este modelo DTO
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->tieneDescuento = $tieneDescuento;
    }


    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get the value of tieneDescuento
     */
    public function getTieneDescuento()
    {
        return $this->tieneDescuento;
    }

    /**
     * Set the value of tieneDescuento
     *
     * @return  self
     */
    public function setTieneDescuento($tieneDescuento)
    {
        $this->tieneDescuento = $tieneDescuento;

        return $this;
    }

    /**
     * Get the value of precioConIVA
     */
    public function getPrecioConIVA()
    {
        return $this->precioConIVA;
    }

    /**
     * Set the value of precioConIVA
     *
     * @return  self
     */
    public function setPrecioConIVA($precioConIVA)
    {
        $this->precioConIVA = $precioConIVA;

        return $this;
    }

    /**
     * Get the value of subtotal
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set the value of subtotal
     *
     * @return  self
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }
}
