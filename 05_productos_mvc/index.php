<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--load all styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/materia/bootstrap.min.css">
</head>

<body>


    <?php session_start();
    include './model/Producto.php'; ?>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">CRUD PHP MYSQL BY KEVIN CATUCUAMBA</a>

            <div class="d-flex justify-content-end">
                <form action="controller/controller.php">
                    <input type="hidden" value="listar" name="opcion">
                    <button type="submit" class="btn btn-success"> <i class="fas fa-clipboard-list mx-2"></i> Listar asc</button>
                </form>
                <form action="controller/controller.php" class="ml-1">
                    <input type="hidden" value="listar_desc" name="opcion">
                    <!-- / <input class="btn btn-danger" type="submit" value="Consultar listado descendente"> -->
                    <button type="submit" class="btn btn-danger"><i class="fas fa-th-list mx-2"></i>Listar desc</button>
                </form>

            </div>

        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">


                <div class="card">
                    <div class="card-header">
                        Datos del producto
                    </div>
                    <div class="card-body">
                        <form action="controller/controller.php">
                            <input type="hidden" value="guardar" name="opcion">
                            <div class="form-group">
                                <input class="form-control" type="text" required name="codigo" placeholder="Inserte el código">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" required name="nombre" placeholder="Inserte el nombre">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" required name="precio" placeholder="Inserte el precio">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" required name="cantidad" placeholder="Inserte la cantidad">
                            </div>
                            <button class="btn btn-primary btn-block"><i class="fas fa-arrow-alt-circle-right"> </i> Registrar</button>
                        </form>

                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="row">
                    <div class="col-6">

                        <div class="alert alert-danger" id="alerta">
                            ¡Error! el código 4 ya existe
                            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">

                        <?php
                        if (isset($_SESSION['valorTotal'])) {
                            echo " <h2 class='mx-2'>Total a pagar: </h2>  <h2> <strong> $ " . $_SESSION['valorTotal'] . " </strong> </h2>";
                        }


                        ?>

                    </div>
                </div>



                <table class="table table-bordered">
                    <tr>
                        <th class="text-center">Código</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Cantidad</th>
                        <th class="text-center">Opciones</th>

                    </tr>
                    <?php

                    //verificamos si existe en sesion el listado de productos:
                    if (isset($_SESSION['listado'])) {
                        $listado = unserialize($_SESSION['listado']);
                        foreach ($listado as $prod) {
                            echo "<tr>";
                            echo "<td class='text-center'>" . $prod->getCodigo() . "</td>";
                            echo "<td class='text-center'>" . $prod->getNombre() . "</td>";
                            echo "<td class='text-center'>" . $prod->getPrecio() . "</td>";
                            echo "<td class='text-center'>" . $prod->getCantidad() . "</td>";
                            //opciones para invocar al controlador indicando la opcion eliminar o cargar
                            //y la fila que selecciono el usuario (con el codigo del producto):
                            echo "<td class='text-center'> <a class='btn btn-danger'  href='controller/controller.php?opcion=eliminar&codigo=" . $prod->getCodigo() . "'><i class='fas fa-trash mx-1'></i></a>  <a class='btn btn-primary'   href='controller/controller.php?opcion=cargar&codigo=" . $prod->getCodigo() . "'>  <i class='fas fa-pen-alt mx-1'></i></a></td>";

                            echo "</tr>";
                        }
                    } else {
                        echo "No se han cargado datos.";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>



    <?php


    if (isset($_SESSION['mensaje'])) {
        echo "<br>MENSAJE DEL SISTEMA: <font color='red'>" . $_SESSION['mensaje'] . "</font><br>";
    }
    ?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>