<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/materia/bootstrap.min.css">
</head>

<body>


    <?php
    include '../model/Producto.php';
    //obtenemos los datos de sesion:
    session_start();
    $producto = $_SESSION['producto'];
    ?>



    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">CRUD PHP MYSQL BY KEVIN CATUCUAMBA</a>


        </div>
    </nav>

    <div class="container p-4">
        <div class="row">

            <div class="col-md-4 mx-auto">


                <div class="card">
                    <div class="card-header">
                        Actualizar producto
                    </div>
                    <div class="card-body">
                        <form action="../controller/controller.php">
                            <input type="hidden" value="actualizar" name="opcion">
                            <div class="form-group">
                                <input class="form-control" type="text" required name="codigo" placeholder="Inserte el código" value="<?= $producto->getCodigo(); ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" required name="nombre" placeholder="Inserte el nombre" value="<?= $producto->getNombre(); ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" required name="precio" placeholder="Inserte el precio" value="<?= $producto->getPrecio(); ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" required name="cantidad" placeholder="Inserte la cantidad" value="<?= $producto->getCantidad(); ?>">
                            </div>
                            <button class="btn btn-primary btn-block"> <i class="fas fa-arrow-alt-circle-right"></i> Registrar</button>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>