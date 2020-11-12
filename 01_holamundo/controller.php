<?php
#Recibir la información desde el formulario (request)
$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

#Ejecutar la capa de modelo:
include_once './LoginModel.php';
$loginModel = new LoginModel();
$resultado = $loginModel->verificarLogin($usuario, $clave);
#Control de navegación de páginas
header('Location: '.$resultado); //El punto es para concatenar cadenas
