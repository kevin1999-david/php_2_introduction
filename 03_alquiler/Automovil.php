<?php
class Automovil
{
    private $anio;
    private $horas;
    private $placa;
    private $color;
    private $pago;

    function __construct($anio, $horas, $placa, $color, $pago)
    {
        $this->anio = $anio;
        $this->horas = $horas;
        $this->placa = $placa;
        $this->color = $color;
        $this->pago = $pago;
    }

    function getAnio()
    {
        return $this->anio;
    }

    function getHoras()
    {
        return $this->horas;
    }

    function getPlaca()
    {
        return $this->placa;
    }
    function getColor()
    {
        return $this->color;
    }
    function getPago()
    {
        return $this->pago;
    }


    function setAnio($anio)
    {
        return $this->anio = $anio;
    }

    function setHoras($horas)
    {
        return $this->horas = $horas;
    }

    function setPlaca($placa)
    {
        return $this->placa = $placa;
    }
    function setColor($color)
    {
        return $this->color = $color;
    }
    function setPago($pago)
    {
        return $this->pago = $pago;
    }
}
