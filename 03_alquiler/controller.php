<?php
#Capturar información del formulario
$anio = $_REQUEST['anio'];
$horas = $_REQUEST['horas'];
$placa = $_REQUEST['placa'];
$color = $_REQUEST['color'];
#Incluismo el modelo alquiler y la clase automovil
include_once './ModelAlquiler.php';
include_once './Automovil.php';
$alquiler = new ModelAlquiler();
#procesamiento de datos
$resultado = $alquiler->alquilar($anio, $horas);
#se inicia una sesión para almencar información dentro de memoria
session_start();
#se crea el objeto del automovil
$automovil = new Automovil($anio, $horas, $placa, $color, $resultado);
#se alamacena la información en el array session
$_SESSION['automovil'] = serialize($automovil);
#se navega entre las páginas
header('Location: pago.php');
