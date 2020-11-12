<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/materia/bootstrap.min.css">


    <style>
        body {

            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 73, 121, 1) 100%, rgba(0, 212, 255, 1) 100%);
        }
    </style>

</head>

<body>
    <?php
    session_start();
    include_once './Automovil.php';
    $automovil = unserialize($_SESSION['automovil']);
    ?>


    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <h1 class="text-center my-4 text-white">Comprobante de alquiler</h1>
            </div>
            <div class="col-8">
                <table class="table table-hover table-bordered table-responsive-lg bg-secondary">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">
                                <h3> FACTURA DE ALQUILER </h3>
                            </th>
                        </tr>
                    </thead>


                    <tr>
                        <td>
                            <h4> PLACA</h4>
                        </td>
                        <td class="text-center">
                            <h4> <?php echo $automovil->getPlaca();  ?> </h4>
                        </td>

                    </tr>


                    <tr>
                        <td>
                            <h4>COLOR</h4>
                        </td>
                        <td class="text-center">
                            <h4> <?php echo $automovil->getColor();  ?> </h4>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h4> HORAS </h4>
                        </td>
                        <td class="text-center">
                            <h4> <?php echo $automovil->getHoras();  ?> </h4>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h3> VALOR A PAGAR </h3>
                        </td>
                        <td class="text-center">
                            <h3> <strong> $ <?php echo $automovil->getPago();  ?> </strong> </h3>
                        </td>

                    </tr>
                    <tr>
                        <th colspan="2" class="text-center">
                            <h2> Gracias por preferirnos !!</h2>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>



</body>

</html>