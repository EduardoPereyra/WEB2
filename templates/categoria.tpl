<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wiki Simpsons</title>
  <base href="{$Raiz}/" target="_self">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="images/minidona.ico">
</head>
<body>
  <form method="post" class="form-inline my-2 my-lg-0" action="shoppingadmin">
    <button class="logout login btn btn-outline-success my-2 my-sm-0">Volver</button>
  </form>
  <div class="table-personajes">
    <h3>Productos del id categoria : {$Id_categoria}</h3>
    <table>
      <thead>
        <tr>
          <th scope="col">Id producto</th>
          <th scope="col">Producto</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        {foreach from=$Productos item=producto}
          <td>{$producto['id_producto']}</td>
          <td>{$producto['producto']}</td>
          <td>$ {$producto['precio']}</td>
        </tr>
      {/foreach}
      </tbody>
    </table>
    <img class="juguetes-decoraciones" src="images/juguetes-decoraciones.png" alt="juguetes-decoraciones">
    <img class="accesorios" src="images/accesorios.jpg" alt="accesorios">
    <img class="ropa" src="images/ropa.jpg" alt="ropa">
  </div>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<script src="js/handlebars.js" charset="utf-8"></script>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
<script src="js/mainApi.js" charset="utf-8"></script>
</body>
</html>
