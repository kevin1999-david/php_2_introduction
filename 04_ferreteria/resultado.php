<!doctype html>
<html lang="en">

<head>
  <title>Resultado</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css">
</head>

<body>


  <div class="col-12">
    <h3 class="my-4 text-center">RESULTADOS</h3>
  </div>
  <div class="container d-flex justify-content-center">
    <div class="row">
      <div class="col-xs-1-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Resultado del registro</h3>
            <p class="card-text">
              <?php
              session_start();
              include_once './Producto.php';
              $producto = unserialize($_SESSION['producto']);
              ?>

              <table class="table table-striped table-bordered">
                <tr>
                  <td>Nombre</td>
                  <td> <?php echo $producto->getNombre() ?> </td>
                </tr>

                <tr>
                  <td>Precio</td>
                  <td> <?php echo $producto->getPrecio() ?> </td>
                </tr>

                <tr>
                  <td>Tiene descuento?</td>
                  <td> <?php echo $producto->getTieneDescuento() ?> </td>
                </tr>


                <tr>
                  <td>Cantidad</td>
                  <td> <?php echo $producto->getCantidad() ?> </td>
                </tr>

                <tr>
                  <td>Subtotal</td>
                  <td> <?php echo $producto->getSubtotal() ?> </td>
                </tr>
              </table>
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>




  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Catálogo de productos</h2>
      </div>
      <div class="col">
        <table class="table table-striped table-bordered">
          <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Descuento</th>
            <th>Subtotal</th>
          </tr>

          <tbody>
            <?php
            include_once './Producto.php';
            //session_start();
            $listaProductos = unserialize($_SESSION['listaProductos']);
            $total = $_SESSION['total'];
            foreach ($listaProductos as $p) {
              echo "<tr>";
              echo "<td>" . $p->getNombre() . "</td>";
              echo "<td>" . $p->getCantidad() . "</td>";
              echo "<td>$ " . $p->getPrecio() . " c/u</td>";
              echo "<td>" . $p->getTieneDescuento() . "</td>";
              echo "<td>$ " . $p->getSubtotal() . "</td>";
              echo "</tr>";
            }
            ?>
            <tr>
              <td class="text-right h5" colspan="4">TOTAL</td>
              <td class="h5">$ <?php echo $total ?> </td>
            </tr>
          </tbody>
        </table>
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