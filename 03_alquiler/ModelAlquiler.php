<?php
class ModelAlquiler
{
    function alquilar($anio, $horas)
    {
        $precioHora = 10;
        $resultado = 0;
        if ($anio <= 2018) {
            $resultado = $precioHora * $horas;
        } else {
            $resultado = $precioHora * $horas * 1.1;
        }
        return $resultado;
    }
}
