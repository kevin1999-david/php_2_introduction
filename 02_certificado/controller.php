<?php
//Recibir Informacion
$cedula = $_REQUEST['cedula'];
$nombres = $_REQUEST['nombres'];
$nota1 = $_REQUEST['nota1'];
$nota2 = $_REQUEST['nota2'];
#Invocar el modelo
include_once "./CertificadoModel.php";
$cModel = new CertificadoModel();
$mensaje = $cModel->generarResultado($cedula, $nombres, $nota1, $nota2);
#Colocar en sesion los valores compartidos
session_start();
$_SESSION['mensaje'] = $mensaje;
#control de navegación
header("Location: certificado.php");
