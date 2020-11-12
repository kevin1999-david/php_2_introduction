<?php
//Recibir los parametros del formulario
//Simbolo $ es una variable
$n1 = $_REQUEST['n1']; //Nombre de la variable ()
$n2 = $_REQUEST['n2'];
$edad = $_REQUEST['edad'];
//Hacer el procesamiento
$suma = $n1 + $n2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <h3>El resultado de la suma es: </h3>
    <h1> <?php echo $suma; ?> </h1>
    <h1>Su edad es: <?php echo $edad; ?> </h1>
</body>

</html>