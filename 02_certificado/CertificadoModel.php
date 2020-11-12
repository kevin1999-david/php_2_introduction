<?php
class CertificadoModel
{
    public function generarResultado($cedula, $nombre, $nota1, $nota2)
    {
        $promedio = ($nota1 + $nota2) / 2;
        if ($promedio >= 7) {
            return "El alumno <strong> $nombre </strong> con cédula $cedula ha <strong> APROBADO </strong> HERRAMIENTAS DE PROGRAMACIÓN con promedio de: <strong> $promedio </strong>"; #Con comillas dobles puedo concatenar variables
        }
        return "El alumno $nombre con cédula $cedula ha CURSADO HERRAMIENTAS DE PROGRAMACIÓN con promedio de: $promedio";
    }
}
