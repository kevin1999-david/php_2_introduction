<?php
//recibir
$filas = $_REQUEST['filas'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr><th>Nro de filas</th> <th>saludo</th> </tr>

        <?php  
            for ($i=0; $i < $filas; $i++) { 
                echo "<tr> <td style='text-align: center'>$i</td> <td> HELLO </td> </tr>";
            }
        ?>
    </table>
</body>
</html>